<?php

/** @noinspection PhpOptionalBeforeRequiredParametersInspection
 * @noinspection UnknownInspectionInspection
 * @noinspection PhpUnused
 * @noinspection PhpMultipleClassesDeclarationsInOneFile
 */

namespace realSamy\reBot;

use realSamy\reBot\Abstracts\{Chat, File, Message, Poll, Update, User, WebhookInfo};

interface messages
{
    /**  Use this method to send text messages. On success, the sent Message is returned.
     *
     * @param int | string $chat_id                                      - Required: Yes      - Unique identifier for
     *                                                                   the target chat or username of the target
     *                                                                   channel (in the format @channelusername)
     * @param string       $text                                         - Required: Yes      - Text of the message to
     *                                                                   be sent, 1-4096 characters after entities
     *                                                                   parsing
     * @param string|null  $parse_mode                                   - Required: Optional - Mode for parsing
     *                                                                   entities in the message text. See formatting
     *                                                                   options for more details.
     * @param array|null   $entities                                     - Required: Optional - List of special
     *                                                                   entities that appear in message text, which
     *                                                                   can be specified instead of parse_mode
     * @param bool         $disable_web_page_preview                     - Required: Optional - Disables link previews
     *                                                                   for links in this message
     * @param bool         $disable_notification                         - Required: Optional - Sends the message
     *                                                                   silently. Users will receive a notification
     *                                                                   with no sound.
     * @param int|null     $reply_to_message_id                          - Required: Optional - If the message is a
     *                                                                   reply, ID of the original message
     * @param bool         $allow_sending_without_reply                  - Required: Optional - Pass True, if the
     *                                                                   message should be sent even if the specified
     *                                                                   replied-to message is not found
     * @param array|null   $reply_markup                                 - Required: Optional - Additional interface
     *                                                                   options. A JSON-serialized object for an
     *                                                                   inline keyboard, custom reply keyboard,
     *                                                                   instructions to remove reply keyboard or to
     *                                                                   force a reply from the user.
     * @return Message
     */
    public function sendMessage(int|string $chat_id, string $text, string $parse_mode = null, array $entities = null, bool $disable_web_page_preview = null, bool $disable_notification = null, int $reply_to_message_id = null, bool $allow_sending_without_reply = null, array $reply_markup = null): Message;

    /**  Use this method to forward messages of any kind. On success, the sent Message is returned.
     *
     * @param int | string $chat_id              - Required: Yes      - Unique identifier for the target chat or
     *                                           username of the target channel (in the format @channelusername)
     * @param int | string $from_chat_id         - Required: Yes      - Unique identifier for the chat where the
     *                                           original message was sent (or channel username in the format
     * @channelusername)
     * @param bool         $disable_notification - Required: Optional - Sends the message silently. Users will receive
     *                                           a notification with no sound.
     * @param int          $message_id           - Required: Yes      - Message identifier in the chat specified in
     *                                           from_chat_id
     * @return Message
     */
    public function forwardMessage(int|string $chat_id, int|string $from_chat_id, bool $disable_notification = null, int $message_id): Message;

    /**  Use this method to send photos. On success, the sent Message is returned.
     *
     * @param int | string   $chat_id                                    - Required: Yes      - Unique identifier for
     *                                                                   the target chat or username of the target
     *                                                                   channel (in the format @channelusername)
     * @param array | string $photo                                      - Required: Yes      - Photo to send. Pass a
     *                                                                   file_id as String to send a photo that exists
     *                                                                   on the Telegram servers (recommended), pass an
     *                                                                   HTTP URL as a String for Telegram to get a
     *                                                                   photo from the Internet, or upload a new photo
     *                                                                   using multipart/form-data. The photo must be
     *                                                                   at most 10 MB in size. The photo's width and
     *                                                                   height must not exceed 10000 in total. Width
     *                                                                   and height ratio must be at most 20. More info
     *                                                                   on Sending Files
     *                                                                   »
     * @param string|null    $caption                                    - Required: Optional - Photo caption (may also
     *                                                                   be used when resending photos by file_id),
     *                                                                   0-1024 characters after entities parsing
     * @param string|null    $parse_mode                                 - Required: Optional - Mode for parsing
     *                                                                   entities in the photo caption. See formatting
     *                                                                   options for more details.
     * @param array|null     $caption_entities                           - Required: Optional - List of special
     *                                                                   entities that appear in the caption, which can
     *                                                                   be specified instead of parse_mode
     * @param bool           $disable_notification                       - Required: Optional - Sends the message
     *                                                                   silently. Users will receive a notification
     *                                                                   with no sound.
     * @param int|null       $reply_to_message_id                        - Required: Optional - If the message is a
     *                                                                   reply, ID of the original message
     * @param bool           $allow_sending_without_reply                - Required: Optional - Pass True, if the
     *                                                                   message should be sent even if the specified
     *                                                                   replied-to message is not found
     * @param array|null     $reply_markup                               - Required: Optional - Additional interface
     *                                                                   options. A JSON-serialized object for an
     *                                                                   inline keyboard, custom reply keyboard,
     *                                                                   instructions to remove reply keyboard or to
     *                                                                   force a reply from the user.
     * @return Message
     */
    public function sendPhoto(int|string $chat_id, array|string $photo, string $caption = null, string $parse_mode = null, array $caption_entities = null, bool $disable_notification = null, int $reply_to_message_id = null, bool $allow_sending_without_reply = null, array $reply_markup = null): Message;

    /**  Use this method to send audio files, if you want Telegram clients to display them in the music player. Your audio must be in the .MP3 or .M4A format. On success, the sent Message is returned. Bots can currently send audio files of up to 50 MB in size, this limit may be changed in the future.
     *
     * @return Message
     */
    public function sendAudio(): Message;

    /**  Use this method to send general files. On success, the sent Message is returned. Bots can currently send files of any type of up to 50 MB in size, this limit may be changed in the future.
     *
     * @param int | string      $chat_id                                    - Required: Yes      - Unique identifier
     *                                                                      for the target chat or username of the
     *                                                                      target channel (in the format
     * @param array | string    $document                                   - Required: Yes      - File to send. Pass a
     *                                                                      file_id as String to send a file that
     *                                                                      exists on the Telegram servers
     *                                                                      (recommended), pass an HTTP URL as a String
     *                                                                      for Telegram to get a file from the
     *                                                                      Internet, or upload a new one using
     *                                                                      multipart/form-data. More info on Sending
     *                                                                      Files »
     * @param array|string|null $thumb                                      - Required: Optional - Thumbnail of the
     *                                                                      file sent; can be ignored if thumbnail
     *                                                                      generation for the file is supported
     *                                                                      server-side. The thumbnail should be in
     *                                                                      JPEG format and less than 200 kB in size. A
     *                                                                      thumbnail's width and height should not
     *                                                                      exceed 320. Ignored if the file is not
     *                                                                      uploaded using multipart/form-data.
     *                                                                      Thumbnails can't be reused and can be only
     *                                                                      uploaded as a new file, so you can pass
     *                                                                      “attach://<file_attach_name>” if the
     *                                                                      thumbnail was uploaded using
     *                                                                      multipart/form-data under
     *                                                                      <file_attach_name>. More info on Sending
     *                                                                      Files »
     * @param string|null       $caption                                    - Required: Optional - Document caption
     *                                                                      (may also be used when resending documents
     *                                                                      by file_id), 0-1024 characters after
     *                                                                      entities parsing
     * @param string|null       $parse_mode                                 - Required: Optional - Mode for parsing
     *                                                                      entities in the document caption. See
     *                                                                      formatting options for more details.
     * @param array|null        $caption_entities                           - Required: Optional - List of special
     *                                                                      entities that appear in the caption, which
     *                                                                      can be specified instead of parse_mode
     * @param bool              $disable_content_type_detection             - Required: Optional - Disables automatic
     *                                                                      server-side content type detection for
     *                                                                      files uploaded using multipart/form-data
     * @param bool              $disable_notification                       - Required: Optional - Sends the message
     *                                                                      silently. Users will receive a notification
     *                                                                      with no sound.
     * @param int|null          $reply_to_message_id                        - Required: Optional - If the message is a
     *                                                                      reply, ID of the original message
     * @param bool              $allow_sending_without_reply                - Required: Optional - Pass True, if the
     *                                                                      message should be sent even if the
     *                                                                      specified replied-to message is not found
     * @param array|null        $reply_markup                               - Required: Optional - Additional interface
     *                                                                      options. A JSON-serialized object for an
     *                                                                      inline keyboard, custom reply keyboard,
     *                                                                      instructions to remove reply keyboard or to
     *                                                                      force a reply from the user.
     * @return Message
     * @channelusername)
     */
    public function sendDocument(int|string $chat_id, array|string $document, array|string $thumb = null, string $caption = null, string $parse_mode = null, array $caption_entities = null, bool $disable_content_type_detection = null, bool $disable_notification = null, int $reply_to_message_id = null, bool $allow_sending_without_reply = null, array $reply_markup = null): Message;

    /**  Use this method to send video files, Telegram clients support mp4 videos (other formats may be sent as Document). On success, the sent Message is returned. Bots can currently send video files of up to 50 MB in size, this limit may be changed in the future.
     *
     * @param int | string      $chat_id                                 - Required: Yes      - Unique identifier for
     *                                                                   the target chat or username of the target
     *                                                                   channel (in the format @channelusername)
     * @param array | string    $video                                   - Required: Yes      - Video to send. Pass a
     *                                                                   file_id as String to send a video that exists
     *                                                                   on the Telegram servers (recommended), pass an
     *                                                                   HTTP URL as a String for Telegram to get a
     *                                                                   video from the Internet, or upload a new video
     *                                                                   using multipart/form-data. More info on
     *                                                                   Sending Files »
     * @param int|null          $duration                                - Required: Optional - Duration of sent video
     *                                                                   in seconds
     * @param int|null          $width                                   - Required: Optional - Video width
     * @param int|null          $height                                  - Required: Optional - Video height
     * @param array|string|null $thumb                                   - Required: Optional - Thumbnail of the file
     *                                                                   sent; can be ignored if thumbnail generation
     *                                                                   for the file is supported server-side. The
     *                                                                   thumbnail should be in JPEG format and less
     *                                                                   than 200 kB in size. A thumbnail's width and
     *                                                                   height should not exceed 320. Ignored if the
     *                                                                   file is not uploaded using
     *                                                                   multipart/form-data. Thumbnails can't be
     *                                                                   reused and can be only uploaded as a new file,
     *                                                                   so you can pass “attach://<file_attach_name>”
     *                                                                   if the thumbnail was uploaded using
     *                                                                   multipart/form-data under <file_attach_name>.
     *                                                                   More info on Sending Files »
     * @param string|null       $caption                                 - Required: Optional - Video caption (may also
     *                                                                   be used when resending videos by file_id),
     *                                                                   0-1024 characters after entities parsing
     * @param string|null       $parse_mode                              - Required: Optional - Mode for parsing
     *                                                                   entities in the video caption. See formatting
     *                                                                   options for more details.
     * @param array|null        $caption_entities                        - Required: Optional - List of special
     *                                                                   entities that appear in the caption, which can
     *                                                                   be specified instead of parse_mode
     * @param bool              $supports_streaming                      - Required: Optional - Pass True, if the
     *                                                                   uploaded video is suitable for streaming
     * @param bool              $disable_notification                    - Required: Optional - Sends the message
     *                                                                   silently. Users will receive a notification
     *                                                                   with no sound.
     * @param int|null          $reply_to_message_id                     - Required: Optional - If the message is a
     *                                                                   reply, ID of the original message
     * @param bool              $allow_sending_without_reply             - Required: Optional - Pass True, if the
     *                                                                   message should be sent even if the specified
     *                                                                   replied-to message is not found
     * @param array|null        $reply_markup                            - Required: Optional - Additional interface
     *                                                                   options. A JSON-serialized object for an
     *                                                                   inline keyboard, custom reply keyboard,
     *                                                                   instructions to remove reply keyboard or to
     *                                                                   force a reply from the user.
     * @return Message
     */
    public function sendVideo(int|string $chat_id, array|string $video, int $duration = null, int $width = null, int $height = null, array|string $thumb = null, string $caption = null, string $parse_mode = null, array $caption_entities = null, bool $supports_streaming = null, bool $disable_notification = null, int $reply_to_message_id = null, bool $allow_sending_without_reply = null, array $reply_markup = null): Message;

    /**  Use this method to send animation files (GIF or H.264/MPEG-4 AVC video without sound). On success, the sent Message is returned. Bots can currently send animation files of up to 50 MB in size, this limit may be changed in the future.
     *
     * @param int | string      $chat_id                                 - Required: Yes      - Unique identifier for
     *                                                                   the target chat or username of the target
     *                                                                   channel (in the format @channelusername)
     * @param array | string    $animation                               - Required: Yes      - Animation to send. Pass
     *                                                                   a file_id as String to send an animation that
     *                                                                   exists on the Telegram servers (recommended),
     *                                                                   pass an HTTP URL as a String for Telegram to
     *                                                                   get an animation from the Internet, or upload
     *                                                                   a new animation using multipart/form-data.
     *                                                                   More info on Sending Files »
     * @param int|null          $duration                                - Required: Optional - Duration of sent
     *                                                                   animation in seconds
     * @param int|null          $width                                   - Required: Optional - Animation width
     * @param int|null          $height                                  - Required: Optional - Animation height
     * @param array|string|null $thumb                                   - Required: Optional - Thumbnail of the file
     *                                                                   sent; can be ignored if thumbnail generation
     *                                                                   for the file is supported server-side. The
     *                                                                   thumbnail should be in JPEG format and less
     *                                                                   than 200 kB in size. A thumbnail's width and
     *                                                                   height should not exceed 320. Ignored if the
     *                                                                   file is not uploaded using
     *                                                                   multipart/form-data. Thumbnails can't be
     *                                                                   reused and can be only uploaded as a new file,
     *                                                                   so you can pass “attach://<file_attach_name>”
     *                                                                   if the thumbnail was uploaded using
     *                                                                   multipart/form-data under <file_attach_name>.
     *                                                                   More info on Sending Files »
     * @param string|null       $caption                                 - Required: Optional - Animation caption (may
     *                                                                   also be used when resending animation by
     *                                                                   file_id), 0-1024 characters after entities
     *                                                                   parsing
     * @param string|null       $parse_mode                              - Required: Optional - Mode for parsing
     *                                                                   entities in the animation caption. See
     *                                                                   formatting options for more details.
     * @param array|null        $caption_entities                        - Required: Optional - List of special
     *                                                                   entities that appear in the caption, which can
     *                                                                   be specified instead of parse_mode
     * @param bool              $disable_notification                    - Required: Optional - Sends the message
     *                                                                   silently. Users will receive a notification
     *                                                                   with no sound.
     * @param int|null          $reply_to_message_id                     - Required: Optional - If the message is a
     *                                                                   reply, ID of the original message
     * @param bool              $allow_sending_without_reply             - Required: Optional - Pass True, if the
     *                                                                   message should be sent even if the specified
     *                                                                   replied-to message is not found
     * @param array|null        $reply_markup                            - Required: Optional - Additional interface
     *                                                                   options. A JSON-serialized object for an
     *                                                                   inline keyboard, custom reply keyboard,
     *                                                                   instructions to remove reply keyboard or to
     *                                                                   force a reply from the user.
     * @return Message
     */
    public function sendAnimation(int|string $chat_id, array|string $animation, int $duration = null, int $width = null, int $height = null, array|string $thumb = null, string $caption = null, string $parse_mode = null, array $caption_entities = null, bool $disable_notification = null, int $reply_to_message_id = null, bool $allow_sending_without_reply = null, array $reply_markup = null): Message;

    /**  Use this method to send audio files, if you want Telegram clients to display the file as a playable voice message. For this to work, your audio must be in an .OGG file encoded with OPUS (other formats may be sent as Audio or Document). On success, the sent Message is returned. Bots can currently send voice messages of up to 50 MB in size, this limit may be changed in the future.
     *
     * @param int | string   $chat_id                                    - Required: Yes      - Unique identifier for
     *                                                                   the target chat or username of the target
     *                                                                   channel (in the format @channelusername)
     * @param array | string $voice                                      - Required: Yes      - Audio file to send.
     *                                                                   Pass a file_id as String to send a file that
     *                                                                   exists on the Telegram servers (recommended),
     *                                                                   pass an HTTP URL as a String for Telegram to
     *                                                                   get a file from the Internet, or upload a new
     *                                                                   one using multipart/form-data. More info on
     *                                                                   Sending Files »
     * @param string|null    $caption                                    - Required: Optional - Voice message caption,
     *                                                                   0-1024 characters after entities parsing
     * @param string|null    $parse_mode                                 - Required: Optional - Mode for parsing
     *                                                                   entities in the voice message caption. See
     *                                                                   formatting options for more details.
     * @param array|null     $caption_entities                           - Required: Optional - List of special
     *                                                                   entities that appear in the caption, which can
     *                                                                   be specified instead of parse_mode
     * @param int|null       $duration                                   - Required: Optional - Duration of the voice
     *                                                                   message in seconds
     * @param bool           $disable_notification                       - Required: Optional - Sends the message
     *                                                                   silently. Users will receive a notification
     *                                                                   with no sound.
     * @param int|null       $reply_to_message_id                        - Required: Optional - If the message is a
     *                                                                   reply, ID of the original message
     * @param bool           $allow_sending_without_reply                - Required: Optional - Pass True, if the
     *                                                                   message should be sent even if the specified
     *                                                                   replied-to message is not found
     * @param array|null     $reply_markup                               - Required: Optional - Additional interface
     *                                                                   options. A JSON-serialized object for an
     *                                                                   inline keyboard, custom reply keyboard,
     *                                                                   instructions to remove reply keyboard or to
     *                                                                   force a reply from the user.
     * @return Message
     */
    public function sendVoice(int|string $chat_id, array|string $voice, string $caption = null, string $parse_mode = null, array $caption_entities = null, int $duration = null, bool $disable_notification = null, int $reply_to_message_id = null, bool $allow_sending_without_reply = null, array $reply_markup = null): Message;

    /**  As of v.4.0, Telegram clients support rounded square mp4 videos of up to 1 minute long. Use this method to send video messages. On success, the sent Message is returned.
     *
     * @param int | string      $chat_id                                 - Required: Yes      - Unique identifier for
     *                                                                   the target chat or username of the target
     *                                                                   channel (in the format @channelusername)
     * @param array | string    $video_note                              - Required: Yes      - Video note to send.
     *                                                                   Pass a file_id as String to send a video note
     *                                                                   that exists on the Telegram servers
     *                                                                   (recommended) or upload a new video using
     *                                                                   multipart/form-data. More info on Sending
     *                                                                   Files ». Sending video notes by a URL is
     *                                                                   currently unsupported
     * @param int|null          $duration                                - Required: Optional - Duration of sent video
     *                                                                   in seconds
     * @param int|null          $length                                  - Required: Optional - Video width and height,
     *                                                                   i.e. diameter of the video message
     * @param array|string|null $thumb                                   - Required: Optional - Thumbnail of the file
     *                                                                   sent; can be ignored if thumbnail generation
     *                                                                   for the file is supported server-side. The
     *                                                                   thumbnail should be in JPEG format and less
     *                                                                   than 200 kB in size. A thumbnail's width and
     *                                                                   height should not exceed 320. Ignored if the
     *                                                                   file is not uploaded using
     *                                                                   multipart/form-data. Thumbnails can't be
     *                                                                   reused and can be only uploaded as a new file,
     *                                                                   so you can pass “attach://<file_attach_name>”
     *                                                                   if the thumbnail was uploaded using
     *                                                                   multipart/form-data under <file_attach_name>.
     *                                                                   More info on Sending Files »
     * @param bool              $disable_notification                    - Required: Optional - Sends the message
     *                                                                   silently. Users will receive a notification
     *                                                                   with no sound.
     * @param int|null          $reply_to_message_id                     - Required: Optional - If the message is a
     *                                                                   reply, ID of the original message
     * @param bool              $allow_sending_without_reply             - Required: Optional - Pass True, if the
     *                                                                   message should be sent even if the specified
     *                                                                   replied-to message is not found
     * @param array|null        $reply_markup                            - Required: Optional - Additional interface
     *                                                                   options. A JSON-serialized object for an
     *                                                                   inline keyboard, custom reply keyboard,
     *                                                                   instructions to remove reply keyboard or to
     *                                                                   force a reply from the user.
     * @return Message
     */
    public function sendVideoNote(int|string $chat_id, array|string $video_note, int $duration = null, int $length = null, array|string $thumb = null, bool $disable_notification = null, int $reply_to_message_id = null, bool $allow_sending_without_reply = null, array $reply_markup = null): Message;

    /**  Use this method to send a group of photos, videos, documents or audios as an album. Documents and audio files can be only grouped in an album with messages of the same type. On success, an array of Messages that were sent is returned.
     *
     * @param int | string $chat_id                     - Required: Yes      - Unique identifier for the target chat or
     *                                                  username of the target channel (in the format @channelusername)
     * @param array        $media                       - Required: Yes      - A JSON-serialized array describing
     *                                                  messages to be sent, must include 2-10 items
     * @param bool         $disable_notification        - Required: Optional - Sends messages silently. Users will
     *                                                  receive a notification with no sound.
     * @param int|null     $reply_to_message_id         - Required: Optional - If the messages are a reply, ID of the
     *                                                  original message
     * @param bool         $allow_sending_without_reply - Required: Optional - Pass True, if the message should be sent
     *                                                  even if the specified replied-to message is not found
     * @return array
     */
    public function sendMediaGroup(int|string $chat_id, array $media, bool $disable_notification = null, int $reply_to_message_id = null, bool $allow_sending_without_reply = null): array;

    /**  Use this method to send point on the map. On success, the sent Message is returned.
     *
     * @param int | string $chat_id                                      - Required: Yes      - Unique identifier for
     *                                                                   the target chat or username of the target
     *                                                                   channel (in the format @channelusername)
     * @param array        $latitude                                     - Required: Yes      - Latitude of the
     *                                                                   location
     * @param array        $longitude                                    - Required: Yes      - Longitude of the
     *                                                                   location
     * @param array|null   $horizontal_accuracy                          - Required: Optional - The radius of
     *                                                                   uncertainty for the location, measured in
     *                                                                   meters; 0-1500
     * @param int|null     $live_period                                  - Required: Optional - Period in seconds for
     *                                                                   which the location will be updated (see Live
     *                                                                   Locations, should be between 60 and 86400.
     * @param int|null     $heading                                      - Required: Optional - For live locations, a
     *                                                                   direction in which the user is moving, in
     *                                                                   degrees. Must be between 1 and 360 if
     *                                                                   specified.
     * @param int|null     $proximity_alert_radius                       - Required: Optional - For live locations, a
     *                                                                   maximum distance for proximity alerts about
     *                                                                   approaching another chat member, in meters.
     *                                                                   Must be between 1 and 100000 if specified.
     * @param bool         $disable_notification                         - Required: Optional - Sends the message
     *                                                                   silently. Users will receive a notification
     *                                                                   with no sound.
     * @param int|null     $reply_to_message_id                          - Required: Optional - If the message is a
     *                                                                   reply, ID of the original message
     * @param bool         $allow_sending_without_reply                  - Required: Optional - Pass True, if the
     *                                                                   message should be sent even if the specified
     *                                                                   replied-to message is not found
     * @param array|null   $reply_markup                                 - Required: Optional - Additional interface
     *                                                                   options. A JSON-serialized object for an
     *                                                                   inline keyboard, custom reply keyboard,
     *                                                                   instructions to remove reply keyboard or to
     *                                                                   force a reply from the user.
     * @return Message
     */
    public function sendLocation(int|string $chat_id, array $latitude, array $longitude, array $horizontal_accuracy = null, int $live_period = null, int $heading = null, int $proximity_alert_radius = null, bool $disable_notification = null, int $reply_to_message_id = null, bool $allow_sending_without_reply = null, array $reply_markup = null): Message;

    /**  Use this method to edit live location messages. A location can be edited until its live_period expires or editing is explicitly disabled by a call to stopMessageLiveLocation. On success, if the edited message is not an inline message, the edited Message is returned, otherwise True is returned.
     *
     * @param int|string|null $chat_id                - Required: Optional - Required if inline_message_id is not
     *                                                specified. Unique identifier for the target chat or username of
     *                                                the target channel (in the format
     * @param int|null        $message_id             - Required: Optional - Required if inline_message_id is not
     *                                                specified. Identifier of the message to edit
     * @param string|null     $inline_message_id      - Required: Optional - Required if chat_id and message_id are not
     *                                                specified. Identifier of the inline message
     * @param array           $latitude               - Required: Yes      - Latitude of new location
     * @param array           $longitude              - Required: Yes      - Longitude of new location
     * @param array|null      $horizontal_accuracy    - Required: Optional - The radius of uncertainty for the
     *                                                location,
     *                                                measured in meters; 0-1500
     * @param int|null        $heading                - Required: Optional - Direction in which the user is moving, in
     *                                                degrees. Must be between 1 and 360 if specified.
     * @param int|null        $proximity_alert_radius - Required: Optional - Maximum distance for proximity alerts
     *                                                about
     *                                                approaching another chat member, in meters. Must be between 1 and
     *                                                100000 if specified.
     * @param array|null      $reply_markup           - Required: Optional - A JSON-serialized object for a new inline
     *                                                keyboard.
     * @return Message | bool
     * @channelusername)
     */
    public function editMessageLiveLocation(int|string $chat_id = null, int $message_id = null, string $inline_message_id = null, array $latitude, array $longitude, array $horizontal_accuracy = null, int $heading = null, int $proximity_alert_radius = null, array $reply_markup = null): Message|bool;

    /**  Use this method to stop updating a live location message before live_period expires. On success, if the message was sent by the bot, the sent Message is returned, otherwise True is returned.
     *
     * @param int|string|null $chat_id           - Required: Optional - Required if inline_message_id is not specified.
     *                                           Unique identifier for the target chat or username of the target
     *                                           channel
     *                                           (in the format
     * @param int|null        $message_id        - Required: Optional - Required if inline_message_id is not specified.
     *                                           Identifier of the message with live location to stop
     * @param string|null     $inline_message_id - Required: Optional - Required if chat_id and message_id are not
     *                                           specified. Identifier of the inline message
     * @param array|null      $reply_markup      - Required: Optional - A JSON-serialized object for a new inline
     *                                           keyboard.
     * @return Message | bool
     * @channelusername)
     */
    public function stopMessageLiveLocation(int|string $chat_id = null, int $message_id = null, string $inline_message_id = null, array $reply_markup = null): Message|bool;

    /**  Use this method to send information about a venue. On success, the sent Message is returned.
     *
     * @param int | string $chat_id                                      - Required: Yes      - Unique identifier for
     *                                                                   the target chat or username of the target
     *                                                                   channel (in the format @channelusername)
     * @param array        $latitude                                     - Required: Yes      - Latitude of the venue
     * @param array        $longitude                                    - Required: Yes      - Longitude of the venue
     * @param string       $title                                        - Required: Yes      - Name of the venue
     * @param string       $address                                      - Required: Yes      - Address of the venue
     * @param string|null  $foursquare_id                                - Required: Optional - Foursquare identifier
     *                                                                   of the venue
     * @param string|null  $foursquare_type                              - Required: Optional - Foursquare type of the
     *                                                                   venue, if known. (For example,
     *                                                                   “arts_entertainment/default”,
     *                                                                   “arts_entertainment/aquarium” or
     *                                                                   “food/icecream”.)
     * @param string|null  $google_place_id                              - Required: Optional - Google Places
     *                                                                   identifier of the venue
     * @param string|null  $google_place_type                            - Required: Optional - Google Places type of
     *                                                                   the venue. (See supported types.)
     * @param bool         $disable_notification                         - Required: Optional - Sends the message
     *                                                                   silently. Users will receive a notification
     *                                                                   with no sound.
     * @param int|null     $reply_to_message_id                          - Required: Optional - If the message is a
     *                                                                   reply, ID of the original message
     * @param bool         $allow_sending_without_reply                  - Required: Optional - Pass True, if the
     *                                                                   message should be sent even if the specified
     *                                                                   replied-to message is not found
     * @param array|null   $reply_markup                                 - Required: Optional - Additional interface
     *                                                                   options. A JSON-serialized object for an
     *                                                                   inline keyboard, custom reply keyboard,
     *                                                                   instructions to remove reply keyboard or to
     *                                                                   force a reply from the user.
     * @return Message
     */
    public function sendVenue(int|string $chat_id, array $latitude, array $longitude, string $title, string $address, string $foursquare_id = null, string $foursquare_type = null, string $google_place_id = null, string $google_place_type = null, bool $disable_notification = null, int $reply_to_message_id = null, bool $allow_sending_without_reply = null, array $reply_markup = null): Message;

    /**  Use this method to send phone contacts. On success, the sent Message is returned.
     *
     * @param int | string $chat_id                                      - Required: Yes      - Unique identifier for
     *                                                                   the target chat or username of the target
     *                                                                   channel (in the format @channelusername)
     * @param string       $phone_number                                 - Required: Yes      - Contact's phone number
     * @param string       $first_name                                   - Required: Yes      - Contact's first name
     * @param string|null  $last_name                                    - Required: Optional - Contact's last name
     * @param string|null  $vcard                                        - Required: Optional - Additional data about
     *                                                                   the contact in the form of a vCard, 0-2048
     *                                                                   bytes
     * @param bool         $disable_notification                         - Required: Optional - Sends the message
     *                                                                   silently. Users will receive a notification
     *                                                                   with no sound.
     * @param int|null     $reply_to_message_id                          - Required: Optional - If the message is a
     *                                                                   reply, ID of the original message
     * @param bool         $allow_sending_without_reply                  - Required: Optional - Pass True, if the
     *                                                                   message should be sent even if the specified
     *                                                                   replied-to message is not found
     * @param array|null   $reply_markup                                 - Required: Optional - Additional interface
     *                                                                   options. A JSON-serialized object for an
     *                                                                   inline keyboard, custom reply keyboard,
     *                                                                   instructions to remove keyboard or to force a
     *                                                                   reply from the user.
     * @return Message
     */
    public function sendContact(int|string $chat_id, string $phone_number, string $first_name, string $last_name = null, string $vcard = null, bool $disable_notification = null, int $reply_to_message_id = null, bool $allow_sending_without_reply = null, array $reply_markup = null): Message;

    /**  Use this method to send a native poll. On success, the sent Message is returned.
     *
     * @param int | string $chat_id                                      - Required: Yes      - Unique identifier for
     *                                                                   the target chat or username of the target
     *                                                                   channel (in the format @channelusername)
     * @param string       $question                                     - Required: Yes      - Poll question, 1-300
     *                                                                   characters
     * @param array        $options                                      - Required: Yes      - A JSON-serialized list
     *                                                                   of answer options, 2-10 strings 1-100
     *                                                                   characters each
     * @param bool         $is_anonymous                                 - Required: Optional - True, if the poll needs
     *                                                                   to be anonymous, defaults to True
     * @param string|null  $type                                         - Required: Optional - Poll type, “quiz” or
     *                                                                   “regular”, defaults to “regular”
     * @param bool         $allows_multiple_answers                      - Required: Optional - True, if the poll
     *                                                                   allows multiple answers, ignored for polls in
     *                                                                   quiz mode, defaults to False
     * @param int|null     $correct_option_id                            - Required: Optional - 0-based identifier of
     *                                                                   the correct answer option, required for polls
     *                                                                   in quiz mode
     * @param string|null  $explanation                                  - Required: Optional - Text that is shown when
     *                                                                   a user chooses an incorrect answer or taps on
     *                                                                   the lamp icon in a quiz-style poll, 0-200
     *                                                                   characters with at most 2 line feeds after
     *                                                                   entities parsing
     * @param string|null  $explanation_parse_mode                       - Required: Optional - Mode for parsing
     *                                                                   entities in the explanation. See formatting
     *                                                                   options for more details.
     * @param array|null   $explanation_entities                         - Required: Optional - List of special
     *                                                                   entities that appear in the poll explanation,
     *                                                                   which can be specified instead of parse_mode
     * @param int|null     $open_period                                  - Required: Optional - Amount of time in
     *                                                                   seconds the poll will be active after
     *                                                                   creation, 5-600. Can't be used together with
     *                                                                   close_date.
     * @param int|null     $close_date                                   - Required: Optional - Point in time (Unix
     *                                                                   timestamp) when the poll will be automatically
     *                                                                   closed. Must be at least 5 and no more than
     *                                                                   600 seconds in the future. Can't be used
     *                                                                   together with open_period.
     * @param bool         $is_closed                                    - Required: Optional - Pass True, if the poll
     *                                                                   needs to be immediately closed. This can be
     *                                                                   useful for poll preview.
     * @param bool         $disable_notification                         - Required: Optional - Sends the message
     *                                                                   silently. Users will receive a notification
     *                                                                   with no sound.
     * @param int|null     $reply_to_message_id                          - Required: Optional - If the message is a
     *                                                                   reply, ID of the original message
     * @param bool         $allow_sending_without_reply                  - Required: Optional - Pass True, if the
     *                                                                   message should be sent even if the specified
     *                                                                   replied-to message is not found
     * @param array|null   $reply_markup                                 - Required: Optional - Additional interface
     *                                                                   options. A JSON-serialized object for an
     *                                                                   inline keyboard, custom reply keyboard,
     *                                                                   instructions to remove reply keyboard or to
     *                                                                   force a reply from the user.
     * @return Message
     */
    public function sendPoll(int|string $chat_id, string $question, array $options, bool $is_anonymous = null, string $type = null, bool $allows_multiple_answers = null, int $correct_option_id = null, string $explanation = null, string $explanation_parse_mode = null, array $explanation_entities = null, int $open_period = null, int $close_date = null, bool $is_closed = null, bool $disable_notification = null, int $reply_to_message_id = null, bool $allow_sending_without_reply = null, array $reply_markup = null): Message;

    /**  Use this method to send an animated emoji that will display a random value. On success, the sent Message is returned.
     *
     * @param int | string $chat_id                                      - Required: Yes      - Unique identifier for
     *                                                                   the target chat or username of the target
     *                                                                   channel (in the format @channelusername)
     * @param string|null  $emoji                                        - Required: Optional - Emoji on which the dice
     *                                                                   throw animation is based. Currently, must be
     *                                                                   one of “”, “”, “”, “”, or “”. Dice can have
     *                                                                   values 1-6 for “” and “”, values 1-5 for “”
     *                                                                   and “”, and values 1-64 for “”. Defaults to “”
     * @param bool         $disable_notification                         - Required: Optional - Sends the message
     *                                                                   silently. Users will receive a notification
     *                                                                   with no sound.
     * @param int|null     $reply_to_message_id                          - Required: Optional - If the message is a
     *                                                                   reply, ID of the original message
     * @param bool         $allow_sending_without_reply                  - Required: Optional - Pass True, if the
     *                                                                   message should be sent even if the specified
     *                                                                   replied-to message is not found
     * @param array|null   $reply_markup                                 - Required: Optional - Additional interface
     *                                                                   options. A JSON-serialized object for an
     *                                                                   inline keyboard, custom reply keyboard,
     *                                                                   instructions to remove reply keyboard or to
     *                                                                   force a reply from the user.
     * @return Message
     */
    public function sendDice(int|string $chat_id, string $emoji = null, bool $disable_notification = null, int $reply_to_message_id = null, bool $allow_sending_without_reply = null, array $reply_markup = null): Message;

    /**  Use this method when you need to tell the user that something is happening on the bot's side. The status is set for 5 seconds or less (when a message arrives from your bot, Telegram clients clear its typing status). Returns True on success.
     *
     * @return bool
     */
    public function sendChatAction(): bool;

    /**  Use this method to edit text and game messages. On success, if the edited message is not an inline message, the edited Message is returned, otherwise True is returned.
     *
     * @param int|string|null $chat_id                  - Required: Optional - Required if inline_message_id is not
     *                                                  specified. Unique identifier for the target chat or username of
     *                                                  the target channel (in the format
     * @param int|null        $message_id               - Required: Optional - Required if inline_message_id is not
     *                                                  specified. Identifier of the message to edit
     * @param string|null     $inline_message_id        - Required: Optional - Required if chat_id and message_id are
     *                                                  not specified. Identifier of the inline message
     * @param string          $text                     - Required: Yes      - New text of the message, 1-4096
     *                                                  characters after entities parsing
     * @param string|null     $parse_mode               - Required: Optional - Mode for parsing entities in the message
     *                                                  text. See formatting options for more details.
     * @param array|null      $entities                 - Required: Optional - List of special entities that appear in
     *                                                  message text, which can be specified instead of parse_mode
     * @param bool            $disable_web_page_preview - Required: Optional - Disables link previews for links in this
     *                                                  message
     * @param array|null      $reply_markup             - Required: Optional - A JSON-serialized object for an inline
     *                                                  keyboard.
     * @return Message | bool
     * @channelusername)
     */
    public function editMessageText(int|string $chat_id = null, int $message_id = null, string $inline_message_id = null, string $text, string $parse_mode = null, array $entities = null, bool $disable_web_page_preview = null, array $reply_markup = null): Message|bool;

    /**  Use this method to edit captions of messages. On success, if the edited message is not an inline message, the edited Message is returned, otherwise True is returned.
     *
     * @param int|string|null $chat_id           - Required: Optional - Required if inline_message_id is not specified.
     *                                           Unique identifier for the target chat or username of the target
     *                                           channel
     *                                           (in the format
     * @param int|null        $message_id        - Required: Optional - Required if inline_message_id is not specified.
     *                                           Identifier of the message to edit
     * @param string|null     $inline_message_id - Required: Optional - Required if chat_id and message_id are not
     *                                           specified. Identifier of the inline message
     * @param string|null     $caption           - Required: Optional - New caption of the message, 0-1024 characters
     *                                           after entities parsing
     * @param string|null     $parse_mode        - Required: Optional - Mode for parsing entities in the message
     *                                           caption. See formatting options for more details.
     * @param array|null      $caption_entities  - Required: Optional - List of special entities that appear in the
     *                                           caption, which can be specified instead of parse_mode
     * @param array|null      $reply_markup      - Required: Optional - A JSON-serialized object for an inline
     *                                           keyboard.
     * @return Message | bool
     * @channelusername)
     */
    public function editMessageCaption(int|string $chat_id = null, int $message_id = null, string $inline_message_id = null, string $caption = null, string $parse_mode = null, array $caption_entities = null, array $reply_markup = null): Message|bool;

    /**  Use this method to edit animation, audio, document, photo, or video messages. If a message is part of a message album, then it can be edited only to an audio for audio albums, only to a document for document albums and to a photo or a video otherwise. When an inline message is edited, a new file can't be uploaded. Use a previously uploaded file via its file_id or specify a URL. On success, if the edited message was sent by the bot, the edited Message is returned, otherwise True is returned.
     *
     * @param int|string|null $chat_id           - Required: Optional - Required if inline_message_id is not specified.
     *                                           Unique identifier for the target chat or username of the target
     *                                           channel
     *                                           (in the format
     * @param int|null        $message_id        - Required: Optional - Required if inline_message_id is not specified.
     *                                           Identifier of the message to edit
     * @param string|null     $inline_message_id - Required: Optional - Required if chat_id and message_id are not
     *                                           specified. Identifier of the inline message
     * @param array           $media             - Required: Yes      - A JSON-serialized object for a new media
     *                                           content
     *                                           of the message
     * @param array|null      $reply_markup      - Required: Optional - A JSON-serialized object for a new inline
     *                                           keyboard.
     * @return Message | bool
     * @channelusername)
     */
    public function editMessageMedia(int|string $chat_id = null, int $message_id = null, string $inline_message_id = null, array $media, array $reply_markup = null): Message|bool;

    /**  Use this method to edit only the reply markup of messages. On success, if the edited message is not an inline message, the edited Message is returned, otherwise True is returned.
     *
     * @param int|string|null $chat_id           - Required: Optional - Required if inline_message_id is not specified.
     *                                           Unique identifier for the target chat or username of the target
     *                                           channel
     *                                           (in the format
     * @param int|null        $message_id        - Required: Optional - Required if inline_message_id is not specified.
     *                                           Identifier of the message to edit
     * @param string|null     $inline_message_id - Required: Optional - Required if chat_id and message_id are not
     *                                           specified. Identifier of the inline message
     * @param array|null      $reply_markup      - Required: Optional - A JSON-serialized object for an inline
     *                                           keyboard.
     * @return Message | bool
     * @channelusername)
     */
    public function editMessageReplyMarkup(int|string $chat_id = null, int $message_id = null, string $inline_message_id = null, array $reply_markup = null): Message|bool;

    /**  Use this method to stop a poll which was sent by the bot. On success, the stopped Poll with the final results is returned.
     *
     * @param int | string $chat_id      - Required: Yes      - Unique identifier for the target chat or username of
     *                                   the target channel (in the format @channelusername)
     * @param int          $message_id   - Required: Yes      - Identifier of the original message with the poll
     * @param array|null   $reply_markup - Required: Optional - A JSON-serialized object for a new message inline
     *                                   keyboard.
     * @return Poll
     */
    public function stopPoll(int|string $chat_id, int $message_id, array $reply_markup = null): Poll;

    /**  Use this method to send static .WEBP or animated .TGS stickers. On success, the sent Message is returned.
     *
     * @param int | string   $chat_id                                    - Required: Yes      - Unique identifier for
     *                                                                   the target chat or username of the target
     *                                                                   channel (in the format @channelusername)
     * @param array | string $sticker                                    - Required: Yes      - Sticker to send. Pass a
     *                                                                   file_id as String to send a file that exists
     *                                                                   on the Telegram servers (recommended), pass an
     *                                                                   HTTP URL as a String for Telegram to get a
     *                                                                   .WEBP file from the Internet, or upload a new
     *                                                                   one using multipart/form-data. More info on
     *                                                                   Sending Files »
     * @param bool           $disable_notification                       - Required: Optional - Sends the message
     *                                                                   silently. Users will receive a notification
     *                                                                   with no sound.
     * @param int|null       $reply_to_message_id                        - Required: Optional - If the message is a
     *                                                                   reply, ID of the original message
     * @param bool           $allow_sending_without_reply                - Required: Optional - Pass True, if the
     *                                                                   message should be sent even if the specified
     *                                                                   replied-to message is not found
     * @param array|null     $reply_markup                               - Required: Optional - Additional interface
     *                                                                   options. A JSON-serialized object for an
     *                                                                   inline keyboard, custom reply keyboard,
     *                                                                   instructions to remove reply keyboard or to
     *                                                                   force a reply from the user.
     * @return Message
     */
    public function sendSticker(int|string $chat_id, array|string $sticker, bool $disable_notification = null, int $reply_to_message_id = null, bool $allow_sending_without_reply = null, array $reply_markup = null): Message;

    /**  Use this method to send invoices. On success, the sent Message is returned.
     *
     * @param int         $chat_id                       - Required: Yes      - Unique identifier for the target
     *                                                   private
     *                                                   chat
     * @param string      $title                         - Required: Yes      - Product name, 1-32 characters
     * @param string      $description                   - Required: Yes      - Product description, 1-255 characters
     * @param string      $payload                       - Required: Yes      - Bot-defined invoice payload, 1-128
     *                                                   bytes. This will not be displayed to the user, use for your
     *                                                   internal processes.
     * @param string      $provider_token                - Required: Yes      - Payments provider token, obtained via
     *                                                   Botfather
     * @param string      $start_parameter               - Required: Yes      - Unique deep-linking parameter that can
     *                                                   be used to generate this invoice when used as a start
     *                                                   parameter
     * @param string      $currency                      - Required: Yes      - Three-letter ISO 4217 currency code,
     *                                                   see
     *                                                   more on currencies
     * @param array       $prices                        - Required: Yes      - Price breakdown, a JSON-serialized list
     *                                                   of components (e.g. product price, tax, discount, delivery
     *                                                   cost, delivery tax, bonus, etc.)
     * @param string|null $provider_data                 - Required: Optional - A JSON-serialized data about the
     *                                                   invoice, which will be shared with the payment provider. A
     *                                                   detailed description of required fields should be provided by
     *                                                   the payment provider.
     * @param string|null $photo_url                     - Required: Optional - URL of the product photo for the
     *                                                   invoice. Can be a photo of the goods or a marketing image for
     *                                                   a service. People like it better when they see what they are
     *                                                   paying for.
     * @param int|null    $photo_size                    - Required: Optional - Photo size
     * @param int|null    $photo_width                   - Required: Optional - Photo width
     * @param int|null    $photo_height                  - Required: Optional - Photo height
     * @param bool        $need_name                     - Required: Optional - Pass True, if you require the user's
     *                                                   full name to complete the order
     * @param bool        $need_phone_number             - Required: Optional - Pass True, if you require the user's
     *                                                   phone number to complete the order
     * @param bool        $need_email                    - Required: Optional - Pass True, if you require the user's
     *                                                   email address to complete the order
     * @param bool        $need_shipping_address         - Required: Optional - Pass True, if you require the user's
     *                                                   shipping address to complete the order
     * @param bool        $send_phone_number_to_provider - Required: Optional - Pass True, if user's phone number
     *                                                   should be sent to provider
     * @param bool        $send_email_to_provider        - Required: Optional - Pass True, if user's email address
     *                                                   should be sent to provider
     * @param bool        $is_flexible                   - Required: Optional - Pass True, if the final price depends
     *                                                   on the shipping method
     * @param bool        $disable_notification          - Required: Optional - Sends the message silently. Users will
     *                                                   receive a notification with no sound.
     * @param int|null    $reply_to_message_id           - Required: Optional - If the message is a reply, ID of the
     *                                                   original message
     * @param bool        $allow_sending_without_reply   - Required: Optional - Pass True, if the message should be
     *                                                   sent
     *                                                   even if the specified replied-to message is not found
     * @param array|null  $reply_markup                  - Required: Optional - A JSON-serialized object for an inline
     *                                                   keyboard. If empty, one 'Pay total price' button will be
     *                                                   shown. If not empty, the first button must be a Pay button.
     * @return Message
     */
    public function sendInvoice(int $chat_id, string $title, string $description, string $payload, string $provider_token, string $start_parameter, string $currency, array $prices, string $provider_data = null, string $photo_url = null, int $photo_size = null, int $photo_width = null, int $photo_height = null, bool $need_name = null, bool $need_phone_number = null, bool $need_email = null, bool $need_shipping_address = null, bool $send_phone_number_to_provider = null, bool $send_email_to_provider = null, bool $is_flexible = null, bool $disable_notification = null, int $reply_to_message_id = null, bool $allow_sending_without_reply = null, array $reply_markup = null): Message;

    /**  Use this method to send a game. On success, the sent Message is returned.
     *
     * @param int        $chat_id                     - Required: Yes      - Unique identifier for the target chat
     * @param string     $game_short_name             - Required: Yes      - Short name of the game, serves as the
     *                                                unique identifier for the game. Set up your games via Botfather.
     * @param bool       $disable_notification        - Required: Optional - Sends the message silently. Users will
     *                                                receive a notification with no sound.
     * @param int|null   $reply_to_message_id         - Required: Optional - If the message is a reply, ID of the
     *                                                original message
     * @param bool       $allow_sending_without_reply - Required: Optional - Pass True, if the message should be sent
     *                                                even if the specified replied-to message is not found
     * @param array|null $reply_markup                - Required: Optional - A JSON-serialized object for an inline
     *                                                keyboard. If empty, one 'Play game_title' button will be shown.
     *                                                If
     *                                                not empty, the first button must launch the game.
     * @return Message
     */
    public function sendGame(int $chat_id, string $game_short_name, bool $disable_notification = null, int $reply_to_message_id = null, bool $allow_sending_without_reply = null, array $reply_markup = null): Message;
}

interface bot
{
    /**  A simple method for testing your bot's auth token. Requires no parameters. Returns basic information about the bot in form of a User object.
     *
     * @return User
     */
    public function getMe(): User;

    /**  Use this method to change the list of the bot's commands. Returns True on success.
     *
     * @param array $commands - Required: Yes - A JSON-serialized list of bot commands to be set as the list of the
     *                        bot's commands. At most 100 commands can be specified.
     * @return bool
     */
    public function setMyCommands(array $commands): bool;

    /**  Use this method to get the current list of the bot's commands. Requires no parameters. Returns Array of BotCommand on success.
     *
     * @return array
     */
    public function getMyCommands(): array;
}

interface chats
{
    /**  Use this method when you need to tell the user that something is happening on the bot's side. The status is set for 5 seconds or less (when a message arrives from your bot, Telegram clients clear its typing status). Returns True on success.
     *
     * @return bool
     */
    public function sendChatAction(): bool;

    /**  Use this method to kick a user from a group, a supergroup or a channel. In the case of supergroups and channels, the user will not be able to return to the group on their own using invite links, etc., unless unbanned first. The bot must be an administrator in the chat for this to work and must have the appropriate admin rights. Returns True on success.
     *
     * @param int | string $chat_id    - Required: Yes      - Unique identifier for the target group or username of the
     *                                 target supergroup or channel (in the format @channelusername)
     * @param int          $user_id    - Required: Yes      - Unique identifier of the target user
     * @param int|null     $until_date - Required: Optional - Date when the user will be unbanned, unix time. If user
     *                                 is banned for more than 366 days or less than 30 seconds from the current time
     *                                 they are considered to be banned forever
     * @return bool
     */
    public function kickChatMember(int|string $chat_id, int $user_id, int $until_date = null): bool;

    /**  Use this method to unban a previously kicked user in a supergroup or channel. The user will not return to the group or channel automatically, but will be able to join via link, etc. The bot must be an administrator for this to work. By default, this method guarantees that after the call the user is not a member of the chat, but will be able to join it. So if the user is a member of the chat they will also be removed from the chat. If you don't want this, use the parameter only_if_banned. Returns True on success.
     *
     * @param int | string $chat_id        - Required: Yes      - Unique identifier for the target group or username of
     *                                     the target supergroup or channel (in the format @username)
     * @param int          $user_id        - Required: Yes      - Unique identifier of the target user
     * @param bool         $only_if_banned - Required: Optional - Do nothing if the user is not banned
     * @return bool
     */
    public function unbanChatMember(int|string $chat_id, int $user_id, bool $only_if_banned = null): bool;

    /**  Use this method to restrict a user in a supergroup. The bot must be an administrator in the supergroup for this to work and must have the appropriate admin rights. Pass True for all permissions to lift restrictions from a user. Returns True on success.
     *
     * @param int | string $chat_id     - Required: Yes      - Unique identifier for the target chat or username of the
     *                                  target supergroup (in the format @supergroupusername)
     * @param int          $user_id     - Required: Yes      - Unique identifier of the target user
     * @param array        $permissions - Required: Yes      - A JSON-serialized object for new user permissions
     * @param int|null     $until_date  - Required: Optional - Date when restrictions will be lifted for the user, unix
     *                                  time. If user is restricted for more than 366 days or less than 30 seconds from
     *                                  the current time, they are considered to be restricted forever
     * @return bool
     */
    public function restrictChatMember(int|string $chat_id, int $user_id, array $permissions, int $until_date = null): bool;

    /**  Use this method to promote or demote a user in a supergroup or a channel. The bot must be an administrator in the chat for this to work and must have the appropriate admin rights. Pass False for all boolean parameters to demote a user. Returns True on success.
     *
     * @param int | string $chat_id              - Required: Yes      - Unique identifier for the target chat or
     *                                           username of the target channel (in the format @channelusername)
     * @param int          $user_id              - Required: Yes      - Unique identifier of the target user
     * @param bool         $is_anonymous         - Required: Optional - Pass True, if the administrator's presence in
     *                                           the chat is hidden
     * @param bool         $can_change_info      - Required: Optional - Pass True, if the administrator can change chat
     *                                           title, photo and other settings
     * @param bool         $can_post_messages    - Required: Optional - Pass True, if the administrator can create
     *                                           channel posts, channels only
     * @param bool         $can_edit_messages    - Required: Optional - Pass True, if the administrator can edit
     *                                           messages of other users and can pin messages, channels only
     * @param bool         $can_delete_messages  - Required: Optional - Pass True, if the administrator can delete
     *                                           messages of other users
     * @param bool         $can_invite_users     - Required: Optional - Pass True, if the administrator can invite new
     *                                           users to the chat
     * @param bool         $can_restrict_members - Required: Optional - Pass True, if the administrator can restrict,
     *                                           ban or unban chat members
     * @param bool         $can_pin_messages     - Required: Optional - Pass True, if the administrator can pin
     *                                           messages, supergroups only
     * @param bool         $can_promote_members  - Required: Optional - Pass True, if the administrator can add new
     *                                           administrators with a subset of their own privileges or demote
     *                                           administrators that he has promoted, directly or indirectly (promoted
     *                                           by administrators that were appointed by him)
     * @return bool
     */
    public function promoteChatMember(int|string $chat_id, int $user_id, bool $is_anonymous = null, bool $can_change_info = null, bool $can_post_messages = null, bool $can_edit_messages = null, bool $can_delete_messages = null, bool $can_invite_users = null, bool $can_restrict_members = null, bool $can_pin_messages = null, bool $can_promote_members = null): bool;

    /**  Use this method to set a custom title for an administrator in a supergroup promoted by the bot. Returns True on success.
     *
     * @param int | string $chat_id      - Required: Yes - Unique identifier for the target chat or username of the
     *                                   target supergroup (in the format @supergroupusername)
     * @param int          $user_id      - Required: Yes - Unique identifier of the target user
     * @param string       $custom_title - Required: Yes - New custom title for the administrator; 0-16 characters,
     *                                   emoji are not allowed
     * @return bool
     */
    public function setChatAdministratorCustomTitle(int|string $chat_id, int $user_id, string $custom_title): bool;

    /**  Use this method to set default chat permissions for all members. The bot must be an administrator in the group or a supergroup for this to work and must have the can_restrict_members admin rights. Returns True on success.
     *
     * @param int | string $chat_id     - Required: Yes - Unique identifier for the target chat or username of the
     *                                  target supergroup (in the format @supergroupusername)
     * @param array        $permissions - Required: Yes - New default chat permissions
     * @return bool
     */
    public function setChatPermissions(int|string $chat_id, array $permissions): bool;

    /**  Use this method to generate a new invite link for a chat; any previously generated link is revoked. The bot must be an administrator in the chat for this to work and must have the appropriate admin rights. Returns the new invite link as String on success.
     *
     * @param int | string $chat_id - Required: Yes - Unique identifier for the target chat or username of the target
     *                              channel (in the format @channelusername)
     * @return string
     */
    public function exportChatInviteLink(int|string $chat_id): string;

    /**  Use this method to set a new profile photo for the chat. Photos can't be changed for private chats. The bot must be an administrator in the chat for this to work and must have the appropriate admin rights. Returns True on success.
     *
     * @param int | string $chat_id - Required: Yes - Unique identifier for the target chat or username of the target
     *                              channel (in the format @channelusername)
     * @param array        $photo   - Required: Yes - New chat photo, uploaded using multipart/form-data
     * @return bool
     */
    public function setChatPhoto(int|string $chat_id, array $photo): bool;

    /**  Use this method to delete a chat photo. Photos can't be changed for private chats. The bot must be an administrator in the chat for this to work and must have the appropriate admin rights. Returns True on success.
     *
     * @param int | string $chat_id - Required: Yes - Unique identifier for the target chat or username of the target
     *                              channel (in the format @channelusername)
     * @return bool
     */
    public function deleteChatPhoto(int|string $chat_id): bool;

    /**  Use this method to change the title of a chat. Titles can't be changed for private chats. The bot must be an administrator in the chat for this to work and must have the appropriate admin rights. Returns True on success.
     *
     * @param int | string $chat_id - Required: Yes - Unique identifier for the target chat or username of the target
     *                              channel (in the format @channelusername)
     * @param string       $title   - Required: Yes - New chat title, 1-255 characters
     * @return bool
     */
    public function setChatTitle(int|string $chat_id, string $title): bool;

    /**  Use this method to change the description of a group, a supergroup or a channel. The bot must be an administrator in the chat for this to work and must have the appropriate admin rights. Returns True on success.
     *
     * @param int | string $chat_id     - Required: Yes      - Unique identifier for the target chat or username of the
     *                                  target channel (in the format @channelusername)
     * @param string|null  $description - Required: Optional - New chat description, 0-255 characters
     * @return bool
     */
    public function setChatDescription(int|string $chat_id, string $description = null): bool;

    /**  Use this method to add a message to the list of pinned messages in a chat. If the chat is not a private chat, the bot must be an administrator in the chat for this to work and must have the 'can_pin_messages' admin right in a supergroup or 'can_edit_messages' admin right in a channel. Returns True on success.
     *
     * @param int | string $chat_id              - Required: Yes      - Unique identifier for the target chat or
     *                                           username of the target channel (in the format @channelusername)
     * @param int          $message_id           - Required: Yes      - Identifier of a message to pin
     * @param bool         $disable_notification - Required: Optional - Pass True, if it is not necessary to send a
     *                                           notification to all chat members about the new pinned message.
     *                                           Notifications are always disabled in channels and private chats.
     * @return bool
     */
    public function pinChatMessage(int|string $chat_id, int $message_id, bool $disable_notification = null): bool;

    /**  Use this method to remove a message from the list of pinned messages in a chat. If the chat is not a private chat, the bot must be an administrator in the chat for this to work and must have the 'can_pin_messages' admin right in a supergroup or 'can_edit_messages' admin right in a channel. Returns True on success.
     *
     * @param int | string $chat_id    - Required: Yes      - Unique identifier for the target chat or username of the
     *                                 target channel (in the format @channelusername)
     * @param int|null     $message_id - Required: Optional - Identifier of a message to unpin. If not specified, the
     *                                 most recent pinned message (by sending date) will be unpinned.
     * @return bool
     */
    public function unpinChatMessage(int|string $chat_id, int $message_id = null): bool;

    /**  Use this method to clear the list of pinned messages in a chat. If the chat is not a private chat, the bot must be an administrator in the chat for this to work and must have the 'can_pin_messages' admin right in a supergroup or 'can_edit_messages' admin right in a channel. Returns True on success.
     *
     * @param int | string $chat_id - Required: Yes - Unique identifier for the target chat or username of the target
     *                              channel (in the format @channelusername)
     * @return bool
     */
    public function unpinAllChatMessages(int|string $chat_id): bool;

    /**  Use this method for your bot to leave a group, supergroup or channel. Returns True on success.
     *
     * @param int | string $chat_id - Required: Yes - Unique identifier for the target chat or username of the target
     *                              supergroup or channel (in the format @channelusername)
     * @return bool
     */
    public function leaveChat(int|string $chat_id): bool;

    /**  Use this method to get up to date information about the chat (current name of the user for one-on-one conversations, current username of a user, group or channel, etc.). Returns a Chat object on success.
     *
     * @param int | string $chat_id - Required: Yes - Unique identifier for the target chat or username of the target
     *                              supergroup or channel (in the format @channelusername)
     * @return Chat
     */
    public function getChat(int|string $chat_id): Chat;

    /**  Use this method to get a list of administrators in a chat. On success, returns an Array of ChatMember objects that contains information about all chat administrators except other bots. If the chat is a group or a supergroup and no administrators were appointed, only the creator will be returned.
     *
     * @param int | string $chat_id - Required: Yes - Unique identifier for the target chat or username of the target
     *                              supergroup or channel (in the format @channelusername)
     * @return array
     */
    public function getChatAdministrators(int|string $chat_id): array;

    /**  Use this method to get the number of members in a chat. Returns Int on success.
     *
     * @param int | string $chat_id - Required: Yes - Unique identifier for the target chat or username of the target
     *                              supergroup or channel (in the format @channelusername)
     * @return int
     */
    public function getChatMembersCount(int|string $chat_id): int;

    /**  Use this method to get information about a member of a chat. Returns a ChatMember object on success.
     *
     * @param int | string $chat_id - Required: Yes - Unique identifier for the target chat or username of the target
     *                              supergroup or channel (in the format @channelusername)
     * @param int          $user_id - Required: Yes - Unique identifier of the target user
     * @return Chat
     */
    public function getChatMember(int|string $chat_id, int $user_id): Chat;

    /**  Use this method to set a new group sticker set for a supergroup. The bot must be an administrator in the chat for this to work and must have the appropriate admin rights. Use the field can_set_sticker_set optionally returned in getChat requests to check if the bot can use this method. Returns True on success.
     *
     * @param int | string $chat_id          - Required: Yes - Unique identifier for the target chat or username of the
     *                                       target supergroup (in the format @supergroupusername)
     * @param string       $sticker_set_name - Required: Yes - Name of the sticker set to be set as the group sticker
     *                                       set
     * @return bool
     */
    public function setChatStickerSet(int|string $chat_id, string $sticker_set_name): bool;

    /**  Use this method to delete a group sticker set from a supergroup. The bot must be an administrator in the chat for this to work and must have the appropriate admin rights. Use the field can_set_sticker_set optionally returned in getChat requests to check if the bot can use this method. Returns True on success.
     *
     * @param int | string $chat_id - Required: Yes - Unique identifier for the target chat or username of the target
     *                              supergroup (in the format @supergroupusername)
     * @return bool
     */
    public function deleteChatStickerSet(int|string $chat_id): bool;
}

interface games
{
    /**  Use this method to send a game. On success, the sent Message is returned.
     *
     * @param int        $chat_id                     - Required: Yes      - Unique identifier for the target chat
     * @param string     $game_short_name             - Required: Yes      - Short name of the game, serves as the
     *                                                unique identifier for the game. Set up your games via Botfather.
     * @param bool       $disable_notification        - Required: Optional - Sends the message silently. Users will
     *                                                receive a notification with no sound.
     * @param int|null   $reply_to_message_id         - Required: Optional - If the message is a reply, ID of the
     *                                                original message
     * @param bool       $allow_sending_without_reply - Required: Optional - Pass True, if the message should be sent
     *                                                even if the specified replied-to message is not found
     * @param array|null $reply_markup                - Required: Optional - A JSON-serialized object for an inline
     *                                                keyboard. If empty, one 'Play game_title' button will be shown.
     *                                                If
     *                                                not empty, the first button must launch the game.
     * @return Message
     */
    public function sendGame(int $chat_id, string $game_short_name, bool $disable_notification = null, int $reply_to_message_id = null, bool $allow_sending_without_reply = null, array $reply_markup = null): Message;

    /**  Use this method to set the score of the specified user in a game. On success, if the message was sent by the bot, returns the edited Message, otherwise returns True. Returns an error, if the new score is not greater than the user's current score in the chat and force is False.
     *
     * @param int         $user_id              - Required: Yes      - User identifier
     * @param int         $score                - Required: Yes      - New score, must be non-negative
     * @param bool        $force                - Required: Optional - Pass True, if the high score is allowed to
     *                                          decrease. This can be useful when fixing mistakes or banning cheaters
     * @param bool        $disable_edit_message - Required: Optional - Pass True, if the game message should not be
     *                                          automatically edited to include the current scoreboard
     * @param int|null    $chat_id              - Required: Optional - Required if inline_message_id is not specified.
     *                                          Unique identifier for the target chat
     * @param int|null    $message_id           - Required: Optional - Required if inline_message_id is not specified.
     *                                          Identifier of the sent message
     * @param string|null $inline_message_id    - Required: Optional - Required if chat_id and message_id are not
     *                                          specified. Identifier of the inline message
     * @return Message | bool
     */
    public function setGameScore(int $user_id, int $score, bool $force = null, bool $disable_edit_message = null, int $chat_id = null, int $message_id = null, string $inline_message_id = null): Message|bool;

    /**  Use this method to get data for high score tables. Will return the score of the specified user and several of their neighbors in a game. On success, returns an Array of GameHighScore objects.
     *
     * @return array
     */
    public function getGameHighScores(): array;
}

interface inline
{
    /**  Use this method to send answers to an inline query. On success, True is returned.No more than 50 results per query are allowed.
     *
     * @param string      $inline_query_id     - Required: Yes      - Unique identifier for the answered query
     * @param array       $results             - Required: Yes      - A JSON-serialized array of results for the inline
     *                                         query
     * @param int|null    $cache_time          - Required: Optional - The maximum amount of time in seconds that the
     *                                         result of the inline query may be cached on the server. Defaults to 300.
     * @param bool        $is_personal         - Required: Optional - Pass True, if results may be cached on the server
     *                                         side only for the user that sent the query. By default, results may be
     *                                         returned to any user who sends the same query
     * @param string|null $next_offset         - Required: Optional - Pass the offset that a client should send in the
     *                                         next query with the same text to receive more results. Pass an empty
     *                                         string if there are no more results or if you don't support pagination.
     *                                         Offset length can't exceed 64 bytes.
     * @param string|null $switch_pm_text      - Required: Optional - If passed, clients will display a button with
     *                                         specified text that switches the user to a private chat with the bot and
     *                                         sends the bot a start message with the parameter switch_pm_parameter
     * @param string|null $switch_pm_parameter - Required: Optional - Deep-linking parameter for the /start message
     *                                         sent to the bot when user presses the switch button. 1-64 characters,
     *                                         only A-Z, a-z,
     *                                         0-9, _ and - are allowed.Example: An inline bot that sends YouTube
     *                                         videos can ask the user to connect the bot to their YouTube account to
     *                                         adapt search results accordingly. To do this, it displays a 'Connect
     *                                         your YouTube account' button above the results, or even before showing
     *                                         any. The user presses the button, switches to a private chat with the
     *                                         bot and, in doing so, passes a start parameter that instructs the bot to
     *                                         return an oauth link. Once done, the bot can offer a switch_inline
     *                                         button so that the user can easily return to the chat where they wanted
     *                                         to use the bot's inline capabilities.
     * @return array
     */
    public function answerInlineQuery(string $inline_query_id, array $results, int $cache_time = null, bool $is_personal = null, string $next_offset = null, string $switch_pm_text = null, string $switch_pm_parameter = null): array;
}

interface stickers
{
    /**  Use this method to set a new group sticker set for a supergroup. The bot must be an administrator in the chat for this to work and must have the appropriate admin rights. Use the field can_set_sticker_set optionally returned in getChat requests to check if the bot can use this method. Returns True on success.
     *
     * @param int | string $chat_id          - Required: Yes - Unique identifier for the target chat or username of the
     *                                       target supergroup (in the format @supergroupusername)
     * @param string       $sticker_set_name - Required: Yes - Name of the sticker set to be set as the group sticker
     *                                       set
     * @return bool
     */
    public function setChatStickerSet(int|string $chat_id, string $sticker_set_name): bool;

    /**  Use this method to delete a group sticker set from a supergroup. The bot must be an administrator in the chat for this to work and must have the appropriate admin rights. Use the field can_set_sticker_set optionally returned in getChat requests to check if the bot can use this method. Returns True on success.
     *
     * @param int | string $chat_id - Required: Yes - Unique identifier for the target chat or username of the target
     *                              supergroup (in the format @supergroupusername)
     * @return bool
     */
    public function deleteChatStickerSet(int|string $chat_id): bool;

    /**  Use this method to send static .WEBP or animated .TGS stickers. On success, the sent Message is returned.
     *
     * @param int | string   $chat_id                                    - Required: Yes      - Unique identifier for
     *                                                                   the target chat or username of the target
     *                                                                   channel (in the format @channelusername)
     * @param array | string $sticker                                    - Required: Yes      - Sticker to send. Pass a
     *                                                                   file_id as String to send a file that exists
     *                                                                   on the Telegram servers (recommended), pass an
     *                                                                   HTTP URL as a String for Telegram to get a
     *                                                                   .WEBP file from the Internet, or upload a new
     *                                                                   one using multipart/form-data. More info on
     *                                                                   Sending Files »
     * @param bool           $disable_notification                       - Required: Optional - Sends the message
     *                                                                   silently. Users will receive a notification
     *                                                                   with no sound.
     * @param int|null       $reply_to_message_id                        - Required: Optional - If the message is a
     *                                                                   reply, ID of the original message
     * @param bool           $allow_sending_without_reply                - Required: Optional - Pass True, if the
     *                                                                   message should be sent even if the specified
     *                                                                   replied-to message is not found
     * @param array|null     $reply_markup                               - Required: Optional - Additional interface
     *                                                                   options. A JSON-serialized object for an
     *                                                                   inline keyboard, custom reply keyboard,
     *                                                                   instructions to remove reply keyboard or to
     *                                                                   force a reply from the user.
     * @return Message
     */
    public function sendSticker(int|string $chat_id, array|string $sticker, bool $disable_notification = null, int $reply_to_message_id = null, bool $allow_sending_without_reply = null, array $reply_markup = null): Message;

    /**  Use this method to get a sticker set. On success, a StickerSet object is returned.
     *
     * @param string $name - Required: Yes - Name of the sticker set
     * @return array
     */
    public function getStickerSet(string $name): array;

    /**  Use this method to upload a .PNG file with a sticker for later use in createNewStickerSet and addStickerToSet methods (can be used multiple times). Returns the uploaded File on success.
     *
     * @param int   $user_id     - Required: Yes - User identifier of sticker file owner
     * @param array $png_sticker - Required: Yes - PNG image with the sticker, must be up to 512 kilobytes in size,
     *                           dimensions must not exceed 512px, and either width or height must be exactly 512px.
     *                           More info on Sending Files »
     * @return File
     */
    public function uploadStickerFile(int $user_id, array $png_sticker): File;

    /**  Use this method to create a new sticker set owned by a user. The bot will be able to edit the sticker set thus created. You must use exactly one of the fields png_sticker or tgs_sticker. Returns True on success.
     *
     * @param int               $user_id        - Required: Yes      - User identifier of created sticker set owner
     * @param string            $name           - Required: Yes      - Short name of sticker set, to be used in
     *                                          t.me/addstickers/ URLs (e.g., animals). Can contain only english
     *                                          letters, digits and underscores. Must begin with a letter, can't
     *                                          contain consecutive underscores and must end in “_by_<bot username>”.
     *                                          <bot_username> is case insensitive. 1-64 characters.
     * @param string            $title          - Required: Yes      - Sticker set title, 1-64 characters
     * @param array|string|null $png_sticker    - Required: Optional - PNG image with the sticker, must be up to 512
     *                                          kilobytes in size, dimensions must not exceed 512px, and either width
     *                                          or
     *                                          height must be exactly
     *                                          512px. Pass a file_id as a String to send a file that already exists on
     *                                          the Telegram servers, pass an HTTP URL as a String for Telegram to get
     *                                          a
     *                                          file from the Internet, or upload a new one using multipart/form-data.
     *                                          More info on Sending Files »
     * @param array|null        $tgs_sticker    - Required: Optional - TGS animation with the sticker, uploaded using
     *                                          multipart/form-data. See
     *                                          https://core.telegram.org/animated_stickers#technical-requirements for
     *                                          technical requirements
     * @param string            $emojis         - Required: Yes      - One or more emoji corresponding to the sticker
     * @param bool              $contains_masks - Required: Optional - Pass True, if a set of mask stickers should be
     *                                          created
     * @param array|null        $mask_position  - Required: Optional - A JSON-serialized object for position where the
     *                                          mask should be placed on faces
     * @return bool
     */
    public function createNewStickerSet(int $user_id, string $name, string $title, string $emojis, array|string $png_sticker = null, array $tgs_sticker = null, bool $contains_masks = null, array $mask_position = null): bool;

    /**  Use this method to add a new sticker to a set created by the bot. You must use exactly one of the fields png_sticker or tgs_sticker. Animated stickers can be added to animated sticker sets and only to them. Animated sticker sets can have up to 50 stickers. Static sticker sets can have up to 120 stickers. Returns True on success.
     *
     * @param int               $user_id       - Required: Yes      - User identifier of sticker set owner
     * @param string            $name          - Required: Yes      - Sticker set name
     * @param array|string|null $png_sticker   - Required: Optional - PNG image with the sticker, must be up to 512
     *                                         kilobytes in size, dimensions must not exceed 512px, and either width or
     *                                         height must be exactly
     *                                         512px. Pass a file_id as a String to send a file that already exists on
     *                                         the Telegram servers, pass an HTTP URL as a String for Telegram to get a
     *                                         file from the Internet, or upload a new one using multipart/form-data.
     *                                         More info on Sending Files »
     * @param array|null        $tgs_sticker   - Required: Optional - TGS animation with the sticker, uploaded using
     *                                         multipart/form-data. See
     *                                         https://core.telegram.org/animated_stickers#technical-requirements for
     *                                         technical requirements
     * @param string            $emojis        - Required: Yes      - One or more emoji corresponding to the sticker
     * @param array|null        $mask_position - Required: Optional - A JSON-serialized object for position where the
     *                                         mask should be placed on faces
     * @return bool
     */
    public function addStickerToSet(int $user_id, string $name, array|string $png_sticker = null, array $tgs_sticker = null, string $emojis, array $mask_position = null): bool;

    /**  Use this method to move a sticker in a set created by the bot to a specific position. Returns True on success.
     *
     * @param string $sticker  - Required: Yes - File identifier of the sticker
     * @param int    $position - Required: Yes - New sticker position in the set, zero-based
     * @return bool
     */
    public function setStickerPositionInSet(string $sticker, int $position): bool;

    /**  Use this method to delete a sticker from a set created by the bot. Returns True on success.
     *
     * @param string $sticker - Required: Yes - File identifier of the sticker
     * @return bool
     */
    public function deleteStickerFromSet(string $sticker): bool;

    /**  Use this method to set the thumbnail of a sticker set. Animated thumbnails can be set for animated sticker sets only. Returns True on success.
     *
     * @param string            $name    - Required: Yes      - Sticker set name
     * @param int               $user_id - Required: Yes      - User identifier of the sticker set owner
     * @param array|string|null $thumb   - Required: Optional - A PNG image with the thumbnail, must be up to 128
     *                                   kilobytes in size and have width and height exactly 100px, or a TGS animation
     *                                   with the thumbnail up to 32 kilobytes in size; see
     *                                   https://core.telegram.org/animated_stickers#technical-requirements for
     *                                   animated
     *                                   sticker technical requirements. Pass a file_id as a String to send a file that
     *                                   already exists on the Telegram servers, pass an HTTP URL as a String for
     *                                   Telegram to get a file from the Internet, or upload a new one using
     *                                   multipart/form-data. More info on Sending Files ». Animated sticker set
     *                                   thumbnail can't be uploaded via HTTP URL.
     * @return bool
     */
    public function setStickerSetThumb(string $name, int $user_id, array|string $thumb = null): bool;
}

interface users
{
    /**  Use this method to get a list of profile pictures for a user. Returns a UserProfilePhotos object.
     *
     * @param int      $user_id - Required: Yes      - Unique identifier of the target user
     * @param int|null $offset  - Required: Optional - Sequential number of the first photo to be returned. By default,
     *                          all photos are returned.
     * @param int|null $limit   - Required: Optional - Limits the number of photos to be retrieved. Values between
     *                          1-100 are accepted. Defaults to 100.
     * @return User
     */
    public function getUserProfilePhotos(int $user_id, int $offset = null, int $limit = null): User;
}

interface webhook
{
    /**  Use this method to receive incoming updates using long polling (wiki). An Array of Update objects is returned.
     *
     * @param int|null   $offset          - Required: Optional - Identifier of the first update to be returned. Must be
     *                                    greater by one than the highest among the identifiers of previously received
     *                                    updates. By default, updates starting with the earliest unconfirmed update
     *                                    are
     *                                    returned. An update is considered confirmed as soon as getUpdates is called
     *                                    with an offset higher than its update_id. The negative offset can be
     *                                    specified to retrieve updates starting from -offset update from the end of
     *                                    the updates queue. All previous updates will forgotten.
     * @param int|null   $limit           - Required: Optional - Limits the number of updates to be retrieved. Values
     *                                    between 1-100 are accepted. Defaults to 100.
     * @param int|null   $timeout         - Required: Optional - Timeout in seconds for long polling. Defaults to 0,
     *                                    i.e. usual short polling. Should be positive, short polling should be used
     *                                    for testing purposes only.
     * @param array|null $allowed_updates - Required: Optional - A JSON-serialized list of the update types you want
     *                                    your bot to receive. For example, specify [“message”, “edited_channel_post”,
     *                                    “callback_query”] to only receive updates of these types. See Update for a
     *                                    complete list of available update types. Specify an empty list to receive all
     *                                    updates regardless of type (default). If not specified, the previous setting
     *                                    will be used.Please note that this parameter doesn't affect updates created
     *                                    before the call to the getUpdates, so unwanted updates may be received for a
     *                                    short period of time.
     * @return Update
     */
    public function getUpdates(int $offset = null, int $limit = null, int $timeout = null, array $allowed_updates = null): Update;

    /**  Use this method to specify a url and receive incoming updates via an outgoing webhook. Whenever there is an update for the bot, we will send an HTTPS POST request to the specified url, containing a JSON-serialized Update. In case of an unsuccessful request, we will give up after a reasonable amount of attempts. Returns True on success.
     *
     * @return bool
     */
    public function setWebhook(): bool;

    /**  Use this method to remove webhook integration if you decide to switch back to getUpdates. Returns True on success.
     *
     * @param bool $drop_pending_updates - Required: Optional - Pass True to drop all pending updates
     * @return bool
     */
    public function deleteWebhook(bool $drop_pending_updates = null): bool;

    /**  Use this method to get current webhook status. Requires no parameters. On success, returns a WebhookInfo object. If the bot is using getUpdates, will return an object with the url field empty.
     *
     * @return WebhookInfo
     */
    public function getWebhookInfo(): WebhookInfo;
}

abstract class InternalDoc extends ApiFactory
{
    public ?messages $messages;
    public ?inline   $inline;
    public ?bot      $bot;
    public ?chats    $chats;
    public ?webhook  $webhook;
    public ?games    $games;
    public ?users    $users;
    public ?stickers $stickers;
}
