<?php

namespace realSamy\reBot\Abstracts;
/**
 * This object represents an incoming callback query from a callback button in an inline keyboard. If the button that
 * originated the query was attached to a message sent by the bot, the field message will be present. If the button was
 * attached to a message sent via the bot (in inline mode), the field inline_message_id will be present. Exactly one of
 * the fields data or game_short_name will be present.
 *
 * @property string  $id                unique identifier for this query
 * @property User    $from              sender
 * @property Message $message           optional. message with the callback button that originated the query. note that
 *           message content and message date will not be available if the message is too old
 * @property string  $inline_message_id   optional. identifier of the message sent via the bot in inline mode, that
 *           originated the query.
 * @property string  $chat_instance      global identifier, uniquely corresponding to the chat to which the message with
 *           the callback button was sent. useful for high scores in games.
 * @property string  $data              optional. data associated with the callback button. be aware that a bad client
 *           can send arbitrary data in this field.
 * @property string  $game_short_name     optional. short name of a game to be returned, serves as the unique identifier
 *           for the game
 * @package realSamy\reBot\Abstracts
 */
abstract class CallbackQuery
{
}