<?php

namespace realSamy\reBot\Abstracts;
/**
 * This object represents a file uploaded to Telegram Passport. Currently all Telegram Passport files are in JPEG
 * format when decrypted and don't exceed 10MB.
 *
 * @property string  $fileId        identifier for this file, which can be used to download or reuse the file
 * @property string  $fileUniqueId  unique identifier for this file, which is supposed to be the same over time and
 *           for different bots. can't be used to download or reuse the file.
 * @property integer $fileSize      file size
 * @property integer $fileDate      unix time when the file was uploaded
 * @package realSamy\reBot\Abstracts
 */
abstract class PassportFile
{
}