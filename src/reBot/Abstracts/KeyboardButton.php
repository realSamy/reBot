<?php

namespace realSamy\reBot\Abstracts;
/**
 * This object represents one button of the reply keyboard. For simple text buttons String can be used instead of this
 * object to specify text of the button. Optional fields request_contact, request_location, and request_poll are
 * mutually exclusive.
 *
 * @property string                 $text             text of the button. if none of the optional fields are used, it
 *           will be sent as a message when the button is pressed
 * @property boolean                $requestContact   optional. if true, the user's phone number will be sent as a
 *           contact when the button is pressed. available in private chats only
 * @property boolean                $requestLocation  optional. if true, the user's current location will be sent when
 *           the button is pressed. available in private chats only
 * @property KeyboardButtonPollType $requestPoll      optional. if specified, the user will be asked to create a poll
 *           and send it to the bot when the button is pressed. available in private chats only
 * @package realSamy\reBot\Abstracts
 */
abstract class KeyboardButton
{
}