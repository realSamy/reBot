<?php

namespace realSamy\reBot\Abstracts;
/**
 * Represents an animation file (GIF or H.264/MPEG-4 AVC video without sound) to be sent.
 *
 * @property string           $type             type of the result, must be animation
 * @property string           $media            file to send. pass a file_id to send a file that exists on the telegram
 *           servers (recommended), pass an http url for telegram to get a file from the internet, or pass
 *           “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name.
 *           more info on sending files »
 * @property InputFile|string $thumb            or string    optional. thumbnail of the file sent; can be ignored if
 *           thumbnail generation for the file is supported server-side. the thumbnail should be in jpeg format and
 *           less than 200 kb in size. a thumbnail's width and height should not exceed 320. ignored if the file is not
 *           uploaded using multipart/form-data. thumbnails can't be reused and can be only uploaded as a new file, so
 *           you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under
 *           <file_attach_name>. more info on sending files »
 * @property string           $caption          optional. caption of the animation to be sent, 0-1024 characters after
 *           entities parsing
 * @property string           $parseMode        optional. mode for parsing entities in the animation caption. see
 *           formatting options for more details.
 * @property MessageEntity[]  $captionEntities  optional. list of special entities that appear in the caption, which can
 *           be specified instead of parse_mode
 * @property integer          $width            optional. animation width
 * @property integer          $height           optional. animation height
 * @property integer          $duration         optional. animation duration
 * @package realSamy\reBot\Abstracts
 */
abstract class InputMediaAnimation extends InputMedia
{
}