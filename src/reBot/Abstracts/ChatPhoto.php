<?php

namespace realSamy\reBot\Abstracts;
/**
 * This object represents a chat photo.
 *
 * @property string $smallFileId        file identifier of small (160x160) chat photo. this file_id can be used only
 *           for photo download and only for as long as the photo is not changed.
 * @property string $smallFileUniqueId  unique file identifier of small (160x160) chat photo, which is supposed to be
 *           the same over time and for different bots. can't be used to download or reuse the file.
 * @property string $bigFileId          file identifier of big (640x640) chat photo. this file_id can be used only
 *           for photo download and only for as long as the photo is not changed.
 * @property string $bigFileUniqueId    unique file identifier of big (640x640) chat photo, which is supposed to be
 *           the same over time and for different bots. can't be used to download or reuse the file.
 * @package realSamy\reBot\Abstracts
 */
abstract class ChatPhoto
{
}