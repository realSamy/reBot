<?php

namespace realSamy\reBot\Abstracts;
/**
 * This object represents a general file (as opposed to photos, voice messages and audio files).
 *
 * @property string    $fileId         identifier for this file, which can be used to download or reuse the file
 * @property string    $fileUniqueId   unique identifier for this file, which is supposed to be the same over time and
 *           for different bots. can't be used to download or reuse the file.
 * @property photosize $thumb          optional. document thumbnail as defined by sender
 * @property string    $fileName       optional. original filename as defined by sender
 * @property string    $mimeType       optional. mime type of the file as defined by sender
 * @property integer   $fileSize       optional. file size
 * @package realSamy\reBot\Abstracts
 */
abstract class Document
{
}