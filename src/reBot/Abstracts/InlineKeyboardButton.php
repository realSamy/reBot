<?php

namespace realSamy\reBot\Abstracts;
/**
 * This object represents one button of an inline keyboard. You must use exactly one of the optional fields.
 *
 * @property string       $text                             label text on the button
 * @property string       $url                              optional. http or tg:// url to be opened when button is
 *           pressed
 * @property LoginUrl     $loginUrl                         optional. an http url used to automatically authorize
 *           the user. can be used as a replacement for the telegram login widget.
 * @property string       $callbackData                     optional. data to be sent in a callback query to the bot
 *           when button is pressed, 1-64 bytes
 * @property string       $switchInlineQuery                optional. if set, pressing the button will prompt the
 *           user to select one of their chats, open that chat and insert the bot's username and the specified inline
 *           query in the input field. can be empty, in which case just the bot's username will be inserted.
 * @property string       $switchInlineQueryCurrentChat     optional. if set, pressing the button will insert the
 *           bot's username and the specified inline query in the current chat's input field. can be empty, in which
 *           case only the bot's username will be inserted.
 * @property CallbackGame $callbackGame                     optional. description of the game that will be launched
 *              when the user presses the button.
 * @property boolean      $pay                              optional. specify true, to send a pay button.
 * @package realSamy\reBot\Abstracts
 */
abstract class InlineKeyboardButton
{
}