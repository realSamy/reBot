<?php

namespace realSamy\reBot\Abstracts;
/**
 * This object represents a parameter of the inline keyboard button used to automatically authorize a user. Serves as a
 * great replacement for the Telegram Login Widget when the user is coming from Telegram. All the user needs to do is
 * tap/click a button and confirm that they want to log in:
 *
 * @property string  $url                  an http url to be opened with user authorization data added to the query
 *           string when the button is pressed. if the user refuses to provide authorization data, the original url
 *           without information about the user will be opened. the data added is the same as described in receiving
 *           authorization data. NOTE: You must always check the hash of the received data to verify the authentication
 *           and the integrity of the data as described in Checking authorization.
 * @property string  $forward_text          optional. new text of the button in forwarded messages.
 * @property string  $bot_username          optional. username of a bot, which will be used for user authorization. see
 *           setting up a bot for more details. if not specified, the current bot's username will be assumed. the url's
 *           domain must be the same as the domain linked with the bot. see linking your domain to the bot for more
 *           details.
 * @property boolean $request_write_access   optional. pass true to request the permission for your bot to send messages
 *           to the user.
 * @package realSamy\reBot\Abstracts
 */
abstract class LoginUrl
{
}