<?php

namespace realSamy\reBot\Abstracts;
/**
 * This object represents a venue.
 *
 * @property location $location          venue location. can't be a live location
 * @property string   $title             name of the venue
 * @property string   $address           address of the venue
 * @property string   $foursquareId      optional. foursquare identifier of the venue
 * @property string   $foursquareType    optional. foursquare type of the venue. (for example,
 *           “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
 * @property string   $googlePlaceId     optional. google places identifier of the venue
 * @property string   $googlePlaceType   optional. google places type of the venue. (see supported types.)
 * @package realSamy\reBot\Abstracts
 */
abstract class Venue
{
}