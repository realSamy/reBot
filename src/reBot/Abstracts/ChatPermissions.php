<?php

namespace realSamy\reBot\Abstracts;
/**
 * Describes actions that a non-administrator user is allowed to take in a chat.
 *
 * @property boolean $canSendMessages         optional. true, if the user is allowed to send text messages, contacts,
 *           locations and venues
 * @property boolean $canSendMediaMessages    optional. true, if the user is allowed to send audios, documents,
 *           photos, videos, video notes and voice notes, implies can_send_messages
 * @property boolean $canSendPolls            optional. true, if the user is allowed to send polls, implies
 *           can_send_messages
 * @property boolean $canSendOtherMessages    optional. true, if the user is allowed to send animations, games,
 *           stickers and use inline bots, implies can_send_media_messages
 * @property boolean $canAddWebPagePreviews   optional. true, if the user is allowed to add web page previews to
 *           their messages, implies can_send_media_messages
 * @property boolean $canChangeInfo           optional. true, if the user is allowed to change the chat title, photo
 *           and other settings. ignored in public supergroups
 * @property boolean $canInviteUsers          optional. true, if the user is allowed to invite new users to the chat
 * @property boolean $canPinMessages          optional. true, if the user is allowed to pin messages. ignored in
 *           public supergroups
 * @package realSamy\reBot\Abstracts
 */
abstract class ChatPermissions
{
}