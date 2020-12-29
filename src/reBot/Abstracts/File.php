<?php

namespace realSamy\reBot\Abstracts;
/**
 * This object represents a file ready to be downloaded. The file can be downloaded via the link
 * https://api.telegram.org/file/botTOKEN/FILE_PATH. It is guaranteed that the link will be valid for at least 1
 * hour. When the link expires, a new one can be requested by calling getFile.
 *
 * @property string  $fileId        identifier for this file, which can be used to download or reuse the file
 * @property string  $fileUniqueId  unique identifier for this file, which is supposed to be the same over time and
 *           for different bots. can't be used to download or reuse the file.
 * @property integer $fileSize      optional. file size, if known
 * @property string  $filePath      optional. file path. use https://api.telegram.org/file/botbotTOKEN/FILE_PATH to
 *           get the file.
 * @package realSamy\reBot\Abstracts
 */
abstract class File
{
}