<?php

namespace realSamy\reBot\Abstracts;
/**
 * This object contains information about one member of a chat.
 *
 * @property user    $user                      information about the user
 * @property string  $status                    the member's status in the chat. can be “creator”, “administrator”,
 *           “member”, “restricted”, “left” or “kicked”
 * @property string  $custom_title               optional. owner and administrators only. custom title for this user
 * @property boolean $is_anonymous               optional. owner and administrators only. true, if the user's presence
 *           in the chat is hidden
 * @property boolean $can_be_edited               optional. administrators only. true, if the bot is allowed to edit
 *           administrator privileges of that user
 * @property boolean $can_post_messages           optional. administrators only. true, if the administrator can post in
 *           the channel; channels only
 * @property boolean $can_edit_messages           optional. administrators only. true, if the administrator can edit
 *           messages of other users and can pin messages; channels only
 * @property boolean $can_delete_messages         optional. administrators only. true, if the administrator can delete
 *           messages of other users
 * @property boolean $can_restrict_members        optional. administrators only. true, if the administrator can restrict,
 *           ban or unban chat members
 * @property boolean $can_promote_members         optional. administrators only. true, if the administrator can add new
 *           administrators with a subset of their own privileges or demote administrators that he has promoted,
 *           directly or indirectly (promoted by administrators that were appointed by the user)
 * @property boolean $can_change_info             optional. administrators and restricted only. true, if the user is
 *           allowed to change the chat title, photo and other settings
 * @property boolean $can_invite_users            optional. administrators and restricted only. true, if the user is
 *           allowed to invite new users to the chat
 * @property boolean $can_pin_messages            optional. administrators and restricted only. true, if the user is
 *           allowed to pin messages; groups and supergroups only
 * @property boolean $is_member                  optional. restricted only. true, if the user is a member of the chat at
 *           the moment of the request
 * @property boolean $can_send_messages           optional. restricted only. true, if the user is allowed to send text
 *           messages, contacts, locations and venues
 * @property boolean $can_send_media_messages      optional. restricted only. true, if the user is allowed to send audios,
 *           documents, photos, videos, video notes and voice notes
 * @property boolean $can_send_polls              optional. restricted only. true, if the user is allowed to send polls
 * @property boolean $can_send_other_messages      optional. restricted only. true, if the user is allowed to send
 *           animations, games, stickers and use inline bots
 * @property boolean $can_add_web_page_previews     optional. restricted only. true, if the user is allowed to add web page
 *           previews to their messages
 * @property integer $until_date                 optional. restricted and kicked only. date when restrictions will be
 *           lifted for this user; unix time
 * @package realSamy\reBot\Abstracts
 */
abstract class ChatMember
{
}