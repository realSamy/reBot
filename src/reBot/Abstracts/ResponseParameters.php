<?php

namespace realSamy\reBot\Abstracts;
/**
 * Contains information about why a request was unsuccessful.
 *
 * @property integer $migrate_to_chat_id   optional. the group has been migrated to a supergroup with the specified
 *           identifier. this number may be greater than 32 bits and some programming languages may have
 *           difficulty/silent defects in interpreting it. but it is smaller than 52 bits, so a signed 64 bit integer
 *           or double-precision float type are safe for storing this identifier.
 * @property integer $retry_after        optional. in case of exceeding flood control, the number of seconds left to
 *           wait before the request can be repeated
 * @package realSamy\reBot\Abstracts
 */
abstract class ResponseParameters
{
}