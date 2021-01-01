<?php

namespace realSamy\reBot\Abstracts;
/**
 * This object represents a file ready to be downloaded. The file can be downloaded via the link
 * https://api.telegram.org/file/botTOKEN/FILE_PATH. It is guaranteed that the link will be valid for at least 1
 * hour. When the link expires, a new one can be requested by calling getFile.
 *
 * @property string  $file_id        identifier for this file, which can be used to download or reuse the file
 * @property string  $file_unique_id  unique identifier for this file, which is supposed to be the same over time and
 *           for different bots. can't be used to download or reuse the file.
 * @property integer $file_size      optional. file size, if known
 * @property string  $file_path      optional. file path. use https://api.telegram.org/file/botbotTOKEN/FILE_PATH to
 *           get the file.
 * @package realSamy\reBot\Abstracts
 */
abstract class File
{
}