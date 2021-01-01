<?php

namespace realSamy\reBot\Abstracts;
/**
 * Describes actions that a non-administrator user is allowed to take in a chat.
 *
 * @property boolean $can_send_messages         optional. true, if the user is allowed to send text messages, contacts,
 *           locations and venues
 * @property boolean $can_send_media_messages    optional. true, if the user is allowed to send audios, documents,
 *           photos, videos, video notes and voice notes, implies can_send_messages
 * @property boolean $can_send_polls            optional. true, if the user is allowed to send polls, implies
 *           can_send_messages
 * @property boolean $can_send_other_messages    optional. true, if the user is allowed to send animations, games,
 *           stickers and use inline bots, implies can_send_media_messages
 * @property boolean $can_add_web_page_previews   optional. true, if the user is allowed to add web page previews to
 *           their messages, implies can_send_media_messages
 * @property boolean $can_change_info           optional. true, if the user is allowed to change the chat title, photo
 *           and other settings. ignored in public supergroups
 * @property boolean $can_invite_users          optional. true, if the user is allowed to invite new users to the chat
 * @property boolean $can_pin_messages          optional. true, if the user is allowed to pin messages. ignored in
 *           public supergroups
 * @package realSamy\reBot\Abstracts
 */
abstract class ChatPermissions
{
}