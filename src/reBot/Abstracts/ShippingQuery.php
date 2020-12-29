<?php

namespace realSamy\reBot\Abstracts;
/**
 * This object contains information about an incoming shipping query.
 *
 * @property string          $id              unique query identifier
 * @property User            $from            user who sent the query
 * @property string          $invoicePayload  bot specified invoice payload
 * @property ShippingAddress $shippingAddress user specified shipping address
 * @package realSamy\reBot\Abstracts
 */
abstract class ShippingQuery
{
}