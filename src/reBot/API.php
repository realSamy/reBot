<?php /** @noinspection PhpPureAttributeCanBeAddedInspection */

namespace realSamy\reBot;
use Closure;

final class API extends InternalDoc
{
    protected ?EventHandler $eventHandler;
    protected bool          $getUpdates;

    public function setEventHandler(EventHandler|string $class): void
    {
        if (is_string($class)) {
            $eventHandler = new $class($this->token);
        }
        else {
            $eventHandler = $class;
        }
        assert($eventHandler instanceof EventHandler, 'Your class must extend realSamy\reBot\EventHandler class');
        $this->eventHandler = $eventHandler;
    }

    public function useGetUpdates(bool $bool): void
    {
        $this->getUpdates = $bool;
    }
    public function loop(string|Closure $callback, bool $async = false): void
    {
        if ($callback instanceof Closure) {
            $callback->bindTo($this);
        }
        while (true) {
            $offset = $offset ?? 0;
            $updates = $this->webhook->getUpdates($offset);
            foreach ($updates as $update) {
                $callback($update);
                $offset = $update->update_id + 1;
            }
        }
    }
}