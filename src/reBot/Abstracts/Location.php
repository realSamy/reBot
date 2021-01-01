<?php

namespace realSamy\reBot\Abstracts;
/**
 * This object represents a point on the map.
 *
 * @property float   $longitude              longitude as defined by sender
 * @property float   $latitude               latitude as defined by sender
 * @property float   $horizontal_accuracy     number    optional. the radius of uncertainty for the location, measured
 *           in meters; 0-1500
 * @property integer $live_period             optional. time relative to the message sending date, during which the
 *           location can be updated, in seconds. for active live locations only.
 * @property integer $heading                optional. the direction in which user is moving, in degrees; 1-360. For
 *           active live locations only.
 * @property integer $proximity_alert_radius   optional. maximum distance for proximity alerts about approaching another
 *           chat member, in meters. for sent live locations only.
 * @package realSamy\reBot\Abstracts
 */
abstract class Location
{
}