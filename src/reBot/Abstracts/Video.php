<?php

namespace realSamy\reBot\Abstracts;
/**
 * This object represents a video file.
 *
 * @property string    $fileId         identifier for this file, which can be used to download or reuse the file
 * @property string    $fileUniqueId   unique identifier for this file, which is supposed to be the same over time and
 *           for different bots. can't be used to download or reuse the file.
 * @property integer   $width          video width as defined by sender
 * @property integer   $height         video height as defined by sender
 * @property integer   $duration       duration of the video in seconds as defined by sender
 * @property photosize $thumb          optional. video thumbnail
 * @property string    $fileName       optional. original filename as defined by sender
 * @property string    $mimeType       optional. mime type of a file as defined by sender
 * @property integer   $fileSize       optional. file size
 * @package realSamy\reBot\Abstracts
 */
abstract class Video
{
}