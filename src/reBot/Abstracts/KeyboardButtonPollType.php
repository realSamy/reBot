<?php

namespace realSamy\reBot\Abstracts;
/**
 * This object represents type of a poll, which is allowed to be created and sent when the corresponding button is
 * pressed.
 *
 * @property string $type optional. if quiz is passed, the user will be allowed to create only polls in the quiz mode.
 *           if regular is passed, only regular polls will be allowed. otherwise, the user will be allowed to create a
 *           poll of any type.
 * @package realSamy\reBot\Abstracts
 */
abstract class KeyboardButtonPollType
{
}