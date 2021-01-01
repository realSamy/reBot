<?php

namespace realSamy\reBot\Abstracts;
/**
 * This object represents a file uploaded to Telegram Passport. Currently all Telegram Passport files are in JPEG
 * format when decrypted and don't exceed 10MB.
 *
 * @property string  $file_id        identifier for this file, which can be used to download or reuse the file
 * @property string  $file_unique_id  unique identifier for this file, which is supposed to be the same over time and
 *           for different bots. can't be used to download or reuse the file.
 * @property integer $file_size      file size
 * @property integer $file_date      unix time when the file was uploaded
 * @package realSamy\reBot\Abstracts
 */
abstract class PassportFile
{
}