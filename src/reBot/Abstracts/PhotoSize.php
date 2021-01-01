<?php

namespace realSamy\reBot\Abstracts;
/**
 * This object represents one size of a photo or a file / sticker thumbnail.
 *
 * @property string  $file_id         identifier for this file, which can be used to download or reuse the file
 * @property string  $file_unique_id   unique identifier for this file, which is supposed to be the same over time and
 *           for different bots. can't be used to download or reuse the file.
 * @property integer $width          photo width
 * @property integer $height         photo height
 * @property integer $file_size       optional. file size
 * @package realSamy\reBot\Abstracts
 */
abstract class PhotoSize
{
}