<?php

namespace realSamy\reBot\Abstracts;
/**
 * This object represents an animation file (GIF or H.264/MPEG-4 AVC video without sound).
 *
 * @property string    $file_id         identifier for this file, which can be used to download or reuse the file
 * @property string    $file_unique_id   unique identifier for this file, which is supposed to be the same over time and
 *           for different bots. can't be used to download or reuse the file.
 * @property integer   $width          video width as defined by sender
 * @property integer   $height         video height as defined by sender
 * @property integer   $duration       duration of the video in seconds as defined by sender
 * @property photosize $thumb          optional. animation thumbnail as defined by sender
 * @property string    $file_name       optional. original animation filename as defined by sender
 * @property string    $mime_type       optional. mime type of the file as defined by sender
 * @property integer   $file_size       optional. file size
 * @package realSamy\reBot\Abstracts
 */
abstract class Animation
{
}