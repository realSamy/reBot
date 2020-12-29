<?php

namespace realSamy\reBot;

use DOMDocument;
use DOMElement;
use DOMXPath;
use PhpParser\{Comment, Node, NodeDumper, NodeTraverser, NodeVisitorAbstract, ParserFactory};
use PhpParser\PrettyPrinter\Standard;

ini_set('memory_limit', '1024M');
ini_set('max_execution_time', -1);
error_reporting(E_ERROR);
require '../autoload.php';
require '../../../../../realSamyDir/autoload.php';
function pregMatch(string $pattern, string $subject): bool
{
    return preg_match($pattern, $subject);
}

$code = <<<'PHP'
<?php 

namespace realSamy\reBot;

use realSamy\reBot\Abstracts\{InputFile, Message, MessageEntity, MessageId, Update, WebhookInfo};

class InternalDoc extends ApiFactory
{
    public messages $messages;
    public inline $inline;
    public bot $bot;
    public chats $chats;
    public webhook $webhook;
    public games $games;
    public users $users;
    public stickers $stickers;
}
PHP;

final class DocsMaker extends NodeVisitorAbstract
{
    public function enterNode(Node $node): Node
    {
        $doc = new DOMDocument();
        $doc->loadHTMLFile(__DIR__ . '/docs.html');
        $xPath = new DOMXPath($doc);
        $xPath->registerNamespace("php", "http://php.net/xpath");
        $xPath->registerPHPFunctions();
        $XPathQueries = [
            'messages' => /**@lang XPath */
                '//div[@id="dev_page_content"]/h4[php:functionString("realSamy\reBot\pregMatch", "/^(send|edit|forward|stop)+([A-Z][a-z]+)*$/", .)]',
            'bot'      => /**@lang XPath */
                '//div[@id="dev_page_content"]/h4[php:functionString("realSamy\reBot\pregMatch", "/^[a-z]+([A-Z][a-z]+)*(My|Me)([A-Z][a-z]+)*$/", .)]',
            'chats'    => /**@lang XPath */
                '//div[@id="dev_page_content"]/h4[php:functionString("realSamy\reBot\pregMatch", "/^[a-z]+([A-Z][a-z]+)*Chat([A-Z][a-z]+)*$/", .)]',
            'games'    => /**@lang XPath */
                '//div[@id="dev_page_content"]/h4[php:functionString("realSamy\reBot\pregMatch", "/^[a-z]+([A-Z][a-z]+)*Game([A-Z][a-z]+)*$/", .)]',
            'inline'   => /**@lang XPath */
                '//div[@id="dev_page_content"]/h4[php:functionString("realSamy\reBot\pregMatch", "/^[a-z]+([A-Z][a-z]+)*Inline([A-Z][a-z]+)*$/", .)]',
            'stickers' => /**@lang XPath */
                '//div[@id="dev_page_content"]/h4[php:functionString("realSamy\reBot\pregMatch", "/^[a-z]+([A-Z][a-z]+)*Sticker([A-Z][a-z]+)*$/", .)]',
            'users'    => /**@lang XPath */
                '//div[@id="dev_page_content"]/h4[php:functionString("realSamy\reBot\pregMatch", "/^[a-z]+([A-Z][a-z]+)*User([A-Z][a-z]+)*$/", .)]',
            'webhook'  => /**@lang XPath */
                '//div[@id="dev_page_content"]/h4[php:functionString("realSamy\reBot\pregMatch", "/^[a-z]+([A-Z][a-z]+)*(Webhook|Updates)([A-Z][a-z]+)*$/", .)]',
        ];
        if ($node instanceof Node\Stmt\Namespace_) {
            foreach ($XPathQueries as $name => $query) {
                $interface = new Node\Stmt\Interface_($name);
                $entities = $xPath->query($query);
                /**
                 * @var DOMElement $entity
                 */
                foreach ($entities as $entity) {
                    $nextContent = $entity->nextSibling->nextSibling->textContent;
                    $returnType = null;
                    if (preg_match_all('/[rR]eturn[^.,]*? ([A-Z][a-z]+)|[^.,]+ ([A-Z][a-z]+) [^.,]*[rR]eturn/', $nextContent, $matches, PREG_UNMATCHED_AS_NULL)) {
                        $matches = array_merge($matches[1], $matches[2]);
                        $newArray = [];
                        foreach ($matches as $key => $match) {
                            if (empty($match)) {
                                unset($matches[$key]);
                                continue;
                            }
                            $newArray[] = $match;
                        }
                        $matches = $newArray;
                        foreach ($matches as $key => $match) {
                            if (empty($match)) {
                                continue;
                            }
                            if (class_exists("\\realSamy\\reBot\\Abstracts\\$match", true)) {
                                $returnType .= trim($match);
                            }
                            elseif (in_array(str_ireplace(['true', 'false'], ['bool'], strtolower($match)), ['bool', 'array'])) {
                                $returnType .= str_ireplace(['true', 'false'], ['bool'], strtolower($match));
                            }
                            if ($key !== (count($matches) - 1)) {
                                $returnType .= ' | ';
//                                exit(print_r($matches, true));
                            }
                        }
                    }
                    else {
                        $returnType = 'array';
                    }
                    $commentHeader = "/**  $nextContent\r\n*\r\n";
                    $comment = null;
                    $nextContent = $entity->nextSibling->nextSibling->nextSibling->nextSibling->getElementsByTagName('tbody')->item(0)->childNodes;
                    $params = [];
                    foreach ($nextContent as $childNode) {
                        if ($childNode instanceof DOMElement) {
                            $tds = $childNode->getElementsByTagName('td');
                            $variable = $tds->item(0)->textContent;
                            $types = $tds->item(1)->textContent;
                            $required = $tds->item(2)->textContent;
                            $detail = $tds->item(3)->textContent;
                            $comment .= "*\s@param\s";
                            $types = str_ireplace(['integer', 'boolean'], ['int', 'bool'], $types);
                            $param['type'] = null;
                            if (stripos($types, ' or ') !== false) {
                                $union = new Node\UnionType([]);
                                foreach (explode(' or ', $types) as $key => $type) {
                                    if (!in_array(strtolower($type), ['int', 'array', 'string', 'bool'])) {
                                        $type = 'array';
                                    }
                                    $union->types[] = new Node\Identifier(strtolower($type));
                                    $comment .= strtolower($type);
                                    if ($key < (count(explode(' or ', $types)) - 1)) {
                                        $comment .= ' | ';
                                    }
                                }
                                $param['type'] = $union;
                            }
                            else {
                                if (stripos($types, 'array') !== false || !in_array(strtolower($types), ['int', 'array', 'string', 'bool'])) {
                                    $types = 'array';
                                }
                                $param['type'] = new Node\Identifier(strtolower($types));
                                $comment .= $types;
                            }
                            $comment .= " \s\$$variable\s- Required: $required\s- $detail\r\n";
                            $newParam = new Node\Param(new Node\Expr\Variable($variable), type: $param['type']);
                            if (trim($required) === 'Optional') {
                                $newParam->default = new Node\Expr\ConstFetch(new Node\Name\FullyQualified('null'));
                            }
                            $params[] = $newParam;

                        }
                    }
                    $comment .= "*\r\n*\s@return\s$returnType \r\n*/";
                    $comments = new Comment($commentHeader . arrangeStr($comment));
                    $interface->stmts[] = new Node\Stmt\ClassMethod($entity->textContent, [
                        'returnType' => $returnType,
                        'params'     => $params,
                        'flags'      => 1,
                        'stmts'      => null,
                    ], [
                        'comments' => [$comments],
                    ]);
                }
                $node->stmts[] = $interface;
            }
        }
        return $node;
    }
}

$dumper = new NodeDumper;
$parser = (new ParserFactory)->create(ParserFactory::PREFER_PHP7);
$traverser = new NodeTraverser();
$printer = new Standard;
$ast = $parser->parse($code);
$traverser->addVisitor(new DocsMaker);
$ast = $traverser->traverse($ast);
//echo json_encode($ast);
function printer(bool $json = false)
{
    global $ast, $printer;
    if ($json) {
        header('Content-Type: application/json');
        echo json_encode($ast, 64 | 128 | 256);
    }
    else {
        header('Content-Type: text/plain');
        echo '<?php' . PHP_EOL . $printer->prettyPrint($ast);
    }
}

file_put_contents('./InternalDoc.php', '<?php' . PHP_EOL . $printer->prettyPrint($ast));
printer(($_GET['a'] ?? '') === '1');
function arrangeStr(string $str, $scapeChr = '\s'): ?string
{
    $lines = explode(PHP_EOL, $str);
    $newArray = [];
    foreach ($lines as $lineKey => $line) {
        $parts = explode($scapeChr, $line);
        foreach ($parts as $partKey => $part) {
            $newArray[$partKey][$lineKey]['name'] = $part;
            $newArray[$partKey][$lineKey]['count'] = strlen($part);
        }
    }
    foreach ($newArray as $partKey => $lines) {
        $maxLength = max(array_column($lines, 'count'));
        foreach ($lines as $lineKey => $part) {
            $diffLength = $maxLength - strlen($part['name']);
            $newArray[$partKey][$lineKey]['name'] .= str_repeat(' ', $diffLength);
        }
    }
    $return = null;
    foreach (range(0, count($newArray[0]) - 1) as $lineKey) {
        $return .= implode(' ', array_column(array_column($newArray, $lineKey), 'name')) . PHP_EOL;
    }
    return $return;
}
