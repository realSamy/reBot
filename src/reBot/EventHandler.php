<?php

namespace realSamy\reBot;
use realSamy\reBot\Abstracts\Update;

/**
 * Class EventHandler
 *
 * @package realSamy\reBot
 */
abstract class EventHandler extends InternalDoc
{
    /**
     * @param Update $update
     */
    abstract public function onUpdateMessage(Update $update): void;

    /**
     * @param Update $update
     */
    abstract public function onUpdateEditedMessage(Update $update): void;

    /**
     * @param Update $update
     */
    abstract public function onUpdateChannelPost(Update $update): void;

    /**
     * @param Update $update
     */
    abstract public function onUpdateEditedChannelPost(Update $update): void;

    /**
     * @param Update $update
     */
    abstract public function onUpdateInlineQuery(Update $update): void;

    /**
     * @param Update $update
     */
    abstract public function onUpdateChosenInlineResult(Update $update): void;

    /**
     * @param Update $update
     */
    abstract public function onUpdateCallbackQuery(Update $update): void;

    /**
     * @param Update $update
     */
    abstract public function onUpdateShippingQuery(Update $update): void;

    /**
     * @param Update $update
     */
    abstract public function onUpdatePreCheckoutQuery(Update $update): void;

    /**
     * @param Update $update
     */
    abstract public function onUpdatePoll(Update $update): void;

    /**
     * @param Update $update
     */
    abstract public function onUpdatePollAnswer(Update $update): void;
}