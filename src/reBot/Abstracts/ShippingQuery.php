<?php

namespace realSamy\reBot\Abstracts;
/**
 * This object contains information about an incoming shipping query.
 *
 * @property string          $id              unique query identifier
 * @property User            $from            user who sent the query
 * @property string          $invoice_payload  bot specified invoice payload
 * @property ShippingAddress $shipping_address user specified shipping address
 * @package realSamy\reBot\Abstracts
 */
abstract class ShippingQuery
{
}