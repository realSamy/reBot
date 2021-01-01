<?php

namespace realSamy\reBot\Abstracts;
/**
 * This object represents a venue.
 *
 * @property location $location          venue location. can't be a live location
 * @property string   $title             name of the venue
 * @property string   $address           address of the venue
 * @property string   $foursquare_id      optional. foursquare identifier of the venue
 * @property string   $foursquare_type    optional. foursquare type of the venue. (for example,
 *           “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
 * @property string   $google_place_id     optional. google places identifier of the venue
 * @property string   $google_place_type   optional. google places type of the venue. (see supported types.)
 * @package realSamy\reBot\Abstracts
 */
abstract class Venue
{
}