<?php

namespace realSamy\reBot\Abstracts;
/**
 * This object represents one size of a photo or a file / sticker thumbnail.
 *
 * @property string  $fileId         identifier for this file, which can be used to download or reuse the file
 * @property string  $fileUniqueId   unique identifier for this file, which is supposed to be the same over time and
 *           for different bots. can't be used to download or reuse the file.
 * @property integer $width          photo width
 * @property integer $height         photo height
 * @property integer $fileSize       optional. file size
 * @package realSamy\reBot\Abstracts
 */
abstract class PhotoSize
{
}