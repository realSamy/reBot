<?php

namespace realSamy\reBot\Abstracts;
/**
 * This object represents a Telegram user or bot.
 *
 * @property int     $id                      This object represents a Telegram user or bot.
 * @property bool    $is_bot                   True, if this user is a bot
 * @property string  $first_name               User's or bot's first name
 * @property ?string $last_name                _Optional_. User's or bot's last name
 * @property ?string $username                _Optional_. User's or bot's username
 * @property ?string $language_code            _Optional_. [IETF language
 *           tag](https://en.wikipedia.org/wiki/IETF_language_tag) of the user's language
 * @property ?bool   $can_join_groups           _Optional_. True, if the bot can be invited to groups. Returned only in
 * [getMe](https://core.telegram.org/bots/api#getme).
 * @property ?bool   $can_read_all_group_messages _Optional_. True, if [privacy
 *           mode](https://core.telegram.org/bots#privacy-mode) is disabled for the bot. Returned only in
 *           [getMe](https://core.telegram.org/bots/api#getme).
 * @property ?bool   $supports_inline_queries   _Optional_. True, if the bot supports inline queries. Returned only in
 * [getMe](https://core.telegram.org/bots/api#getme).
 * @package realSamy\reBot\Abstracts
 */
abstract class User
{
}