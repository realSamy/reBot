<?php

namespace realSamy\reBot\Abstracts;
/**
 * This object represents a custom keyboard with reply options (see Introduction to bots for details and examples).
 *
 * @property keyboardbutton[][] $keyboard          array of button rows, each represented by an array of keyboardbutton
 *           objects
 * @property boolean            $resize_keyboard    optional. requests clients to resize the keyboard vertically for
 *           optimal fit (e.g., make the keyboard smaller if there are just two rows of buttons). defaults to false, in
 *           which case the custom keyboard is always of the same height as the app's standard keyboard.
 * @property boolean            $one_time_keyboard   optional. requests clients to hide the keyboard as soon as it's been
 *           used. the keyboard will still be available, but clients will automatically display the usual
 *           letter-keyboard in the chat – the user can press a special button in the input field to see the custom
 *           keyboard again. defaults to false.
 * @property boolean            $selective         optional. use this parameter if you want to show the keyboard to
 *           specific users only. targets: 1) users that are @mentioned in the text of the message object; 2) if the
 *           bot's message is a reply (has reply_to_message_id), sender of the original message. Example: A user
 *           requests to change the bot's language, bot replies to the request with a keyboard to select the new
 *           language. Other users in the group don't see the keyboard.
 * @package realSamy\reBot\Abstracts
 */
abstract class ReplyKeyboardMarkup
{
}