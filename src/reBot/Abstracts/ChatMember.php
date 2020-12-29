<?php

namespace realSamy\reBot\Abstracts;
/**
 * This object contains information about one member of a chat.
 *
 * @property user    $user                      information about the user
 * @property string  $status                    the member's status in the chat. can be “creator”, “administrator”,
 *           “member”, “restricted”, “left” or “kicked”
 * @property string  $customTitle               optional. owner and administrators only. custom title for this user
 * @property boolean $isAnonymous               optional. owner and administrators only. true, if the user's presence
 *           in the chat is hidden
 * @property boolean $canBeEdited               optional. administrators only. true, if the bot is allowed to edit
 *           administrator privileges of that user
 * @property boolean $canPostMessages           optional. administrators only. true, if the administrator can post in
 *           the channel; channels only
 * @property boolean $canEditMessages           optional. administrators only. true, if the administrator can edit
 *           messages of other users and can pin messages; channels only
 * @property boolean $canDeleteMessages         optional. administrators only. true, if the administrator can delete
 *           messages of other users
 * @property boolean $canRestrictMembers        optional. administrators only. true, if the administrator can restrict,
 *           ban or unban chat members
 * @property boolean $canPromoteMembers         optional. administrators only. true, if the administrator can add new
 *           administrators with a subset of their own privileges or demote administrators that he has promoted,
 *           directly or indirectly (promoted by administrators that were appointed by the user)
 * @property boolean $canChangeInfo             optional. administrators and restricted only. true, if the user is
 *           allowed to change the chat title, photo and other settings
 * @property boolean $canInviteUsers            optional. administrators and restricted only. true, if the user is
 *           allowed to invite new users to the chat
 * @property boolean $canPinMessages            optional. administrators and restricted only. true, if the user is
 *           allowed to pin messages; groups and supergroups only
 * @property boolean $isMember                  optional. restricted only. true, if the user is a member of the chat at
 *           the moment of the request
 * @property boolean $canSendMessages           optional. restricted only. true, if the user is allowed to send text
 *           messages, contacts, locations and venues
 * @property boolean $canSendMediaMessages      optional. restricted only. true, if the user is allowed to send audios,
 *           documents, photos, videos, video notes and voice notes
 * @property boolean $canSendPolls              optional. restricted only. true, if the user is allowed to send polls
 * @property boolean $canSendOtherMessages      optional. restricted only. true, if the user is allowed to send
 *           animations, games, stickers and use inline bots
 * @property boolean $canAddWebPagePreviews     optional. restricted only. true, if the user is allowed to add web page
 *           previews to their messages
 * @property integer $untilDate                 optional. restricted and kicked only. date when restrictions will be
 *           lifted for this user; unix time
 * @package realSamy\reBot\Abstracts
 */
abstract class ChatMember
{
}