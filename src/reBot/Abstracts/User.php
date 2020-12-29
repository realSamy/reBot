<?php

namespace realSamy\reBot\Abstracts;
/**
 * This object represents a Telegram user or bot.
 *
 * @property int     $id                      This object represents a Telegram user or bot.
 * @property bool    $isBot                   True, if this user is a bot
 * @property string  $firstName               User's or bot's first name
 * @property ?string $lastName                _Optional_. User's or bot's last name
 * @property ?string $username                _Optional_. User's or bot's username
 * @property ?string $languageCode            _Optional_. [IETF language
 *           tag](https://en.wikipedia.org/wiki/IETF_language_tag) of the user's language
 * @property ?bool   $canJoinGroups           _Optional_. True, if the bot can be invited to groups. Returned only in
 * [getMe](https://core.telegram.org/bots/api#getme).
 * @property ?bool   $canReadAllGroupMessages _Optional_. True, if [privacy
 *           mode](https://core.telegram.org/bots#privacy-mode) is disabled for the bot. Returned only in
 *           [getMe](https://core.telegram.org/bots/api#getme).
 * @property ?bool   $supportsInlineQueries   _Optional_. True, if the bot supports inline queries. Returned only in
 * [getMe](https://core.telegram.org/bots/api#getme).
 * @package realSamy\reBot\Abstracts
 */
abstract class User
{
}