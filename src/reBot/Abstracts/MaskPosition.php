<?php

namespace realSamy\reBot\Abstracts;
/**
 * This object describes the position on faces where a mask should be placed by default.
 *
 * @property string $point  the part of the face relative to which the mask should be placed. one of “forehead”,
 *           “eyes”, “mouth”, or “chin”.
 * @property float  $xShift shift by x-axis measured in widths of the mask scaled to the face size, from left to right.
 *           for example, choosing -1.0 will place mask just to the left of the default mask position.
 * @property float  $yShift shift by y-axis measured in heights of the mask scaled to the face size, from top to
 *           bottom. for example, 1.0 will place the mask just below the default mask position.
 * @property float  $scale  mask scaling coefficient. for example, 2.0 means double size.
 * @package realSamy\reBot\Abstracts
 */
abstract class MaskPosition
{
}