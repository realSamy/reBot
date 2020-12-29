<?php

namespace realSamy\reBot\Abstracts;
/**
 * Represents a result of an inline query that was chosen by the user and sent to their chat partner.
 *
 * @property string   $resultId          the unique identifier for the result that was chosen
 * @property User     $from              the user that chose the result
 * @property Location $location          optional. sender location, only for bots that require user location
 * @property string   $inlineMessageId   optional. identifier of the sent inline message. available only if there is an
 *           inline keyboard attached to the message. will be also received in callback queries and can be used to edit
 *           the message.
 * @property string   $query             the query that was used to obtain the result
 * @package realSamy\reBot\Abstracts
 */
abstract class ChosenInlineResult
{
}