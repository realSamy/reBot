<?php

namespace realSamy\reBot\Abstracts;
/** Contains information about the current status of a webhook.
 *
 * @property string  $url                    webhook url, may be empty if webhook is not set up
 * @property boolean $has_custom_certificate true, if a custom certificate was provided for webhook certificate checks
 * @property integer $pending_update_count   number of updates awaiting delivery
 * @property string  $ip_address             optional. currently used webhook ip address
 * @property integer $last_error_date        optional. unix time for the most recent error that happened when trying to
 *           deliver an update via webhook
 * @property string  $last_error_message     optional. error message in human-readable format for the most recent error
 *           that happened when trying to deliver an update via webhook
 * @property integer $max_connections        optional. maximum allowed number of simultaneous https connections to the
 *           webhook for update delivery
 * @property array   $allowed_updates        of string    optional. a list of update types the bot is subscribed to.
 *           defaults to all update types
 */
abstract class WebhookInfo
{
}