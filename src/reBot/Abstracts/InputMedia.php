<?php

namespace realSamy\reBot\Abstracts;
/**
 * This object represents the content of a media message to be sent. It should be one of
 * * InputMediaAnimation
 * * InputMediaDocument
 * * InputMediaAudio
 * * InputMediaPhoto
 * * InputMediaVideo
 *
 * @property string          $type                  type of the result, must be photo
 * @property string          $media                 file to send. pass a file_id to send a file that exists on the
 *           telegram servers
 *           (recommended), pass an http url for telegram to get a file from the internet, or pass
 *           “attach://file_attach_name” to upload a new one using multipart/form-data under file_attach_name name.
 *           more info on sending files »
 * @property string          $caption               optional. caption of the photo to be sent, 0-1024 characters after
 *           entities parsing
 * @property string          $parse_mode             optional. mode for parsing entities in the photo caption. see
 *           formatting options for more details.
 * @property MessageEntity[] $caption_entities       optional. list of special entities that appear in the
 *           caption, which can be specified instead of parse_mode
 * @package realSamy\reBot\Abstracts
 */
abstract class InputMedia
{
}