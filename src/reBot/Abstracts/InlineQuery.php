<?php

namespace realSamy\reBot\Abstracts;
/**
 * This object represents an incoming inline query. When the user sends an empty query, your bot could return some
 * default or trending results.
 *
 * @property string   $id       unique identifier for this query
 * @property User     $from     sender
 * @property Location $location optional. sender location, only for bots that request user location
 * @property string   $query    text of the query (up to 256 characters)
 * @property string   $offset   offset of the results to be returned, can be controlled by the bot
 * @package realSamy\reBot\Abstracts
 */
abstract class InlineQuery
{
}