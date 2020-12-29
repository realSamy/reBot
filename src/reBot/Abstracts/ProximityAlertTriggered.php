<?php

namespace realSamy\reBot\Abstracts;
/**
 * This object represents the content of a service message, sent whenever a user in the chat triggers a proximity alert
 * set by another user.
 *
 * @property user    $traveler user that triggered the alert
 * @property user    $watcher  user that set the alert
 * @property integer $distance the distance between the users
 * @package realSamy\reBot\Abstracts
 */
abstract class ProximityAlertTriggered
{
}