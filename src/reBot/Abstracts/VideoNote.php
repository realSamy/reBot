<?php

namespace realSamy\reBot\Abstracts;
/**
 * This object represents a video message (available in Telegram apps as of v.4.0).
 *
 * @property string    $fileId         identifier for this file, which can be used to download or reuse the file
 * @property string    $fileUniqueId   unique identifier for this file, which is supposed to be the same over time and
 *           for different bots. can't be used to download or reuse the file.
 * @property integer   $length         video width and height (diameter of the video message) as defined by sender
 * @property integer   $duration       duration of the video in seconds as defined by sender
 * @property photosize $thumb          optional. video thumbnail
 * @property integer   $fileSize       optional. file size
 * @package realSamy\reBot\Abstracts
 */
abstract class VideoNote
{
}