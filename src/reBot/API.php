<?php /** @noinspection PhpPureAttributeCanBeAddedInspection */

namespace realSamy\reBot;
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

}