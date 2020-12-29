<?php

namespace realSamy\reBot\Abstracts;
/**
 * Upon receiving a message with this object, Telegram clients will display a reply interface to the user (act as if
 * the user has selected the bot's message and tapped 'Reply'). This can be extremely useful if you want to create
 * user-friendly step-by-step interfaces without having to sacrifice privacy mode.
 *
 * @property true    $forceReply  shows reply interface to the user, as if they manually selected the bot's message and
 *           tapped 'reply'
 * @property boolean $selective   optional. use this parameter if you want to force reply from specific users only.
 *           targets: 1) users that are @mentioned in the text of the message object; 2) if the bot's message is a
 *           reply (has reply_to_message_id), sender of the original message.
 * @package realSamy\reBot\Abstracts
 */
abstract class ForceReply
{
}