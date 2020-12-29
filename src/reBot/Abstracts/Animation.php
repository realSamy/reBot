<?php

namespace realSamy\reBot\Abstracts;
/**
 * This object represents an animation file (GIF or H.264/MPEG-4 AVC video without sound).
 *
 * @property string    $fileId         identifier for this file, which can be used to download or reuse the file
 * @property string    $fileUniqueId   unique identifier for this file, which is supposed to be the same over time and
 *           for different bots. can't be used to download or reuse the file.
 * @property integer   $width          video width as defined by sender
 * @property integer   $height         video height as defined by sender
 * @property integer   $duration       duration of the video in seconds as defined by sender
 * @property photosize $thumb          optional. animation thumbnail as defined by sender
 * @property string    $fileName       optional. original animation filename as defined by sender
 * @property string    $mimeType       optional. mime type of the file as defined by sender
 * @property integer   $fileSize       optional. file size
 * @package realSamy\reBot\Abstracts
 */
abstract class Animation
{
}