<?php

namespace realSamy\reBot\Abstracts;
/**
 * This object represents a chat photo.
 *
 * @property string $small_file_id        file identifier of small (160x160) chat photo. this file_id can be used only
 *           for photo download and only for as long as the photo is not changed.
 * @property string $small_file_unique_id  unique file identifier of small (160x160) chat photo, which is supposed to be
 *           the same over time and for different bots. can't be used to download or reuse the file.
 * @property string $big_file_id          file identifier of big (640x640) chat photo. this file_id can be used only
 *           for photo download and only for as long as the photo is not changed.
 * @property string $big_file_unique_id    unique file identifier of big (640x640) chat photo, which is supposed to be
 *           the same over time and for different bots. can't be used to download or reuse the file.
 * @package realSamy\reBot\Abstracts
 */
abstract class ChatPhoto
{
}