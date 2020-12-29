<?php

namespace realSamy\reBot\Abstracts;
/**
 * This object represents a sticker.
 *
 * @property string       $fileId       identifier for this file, which can be used to download or reuse the file
 * @property string       $fileUniqueId unique identifier for this file, which is supposed to be the same over time and
 *           for different bots. can't be used to download or reuse the file.
 * @property integer      $width        sticker width
 * @property integer      $height       sticker height
 * @property boolean      $isAnimated   true, if the sticker is animated
 * @property photosize    $thumb        optional. sticker thumbnail in the .webp or .jpg format
 * @property string       $emoji        optional. emoji associated with the sticker
 * @property string       $setName      optional. name of the sticker set to which the sticker belongs
 * @property MaskPosition $maskPosition optional. for mask stickers, the position where the mask should be placed
 * @property integer      $fileSize     optional. file size
 * @package realSamy\reBot\Abstracts
 */
abstract class Sticker
{
}