<?php

namespace realSamy\reBot\Abstracts;
/**
 * This object contains information about an incoming pre-checkout query.
 *
 * @property string    $id               unique query identifier
 * @property user      $from             user who sent the query
 * @property string    $currency         three-letter iso 4217 currency code
 * @property integer   $totalAmount      total price in the smallest units of the currency (integer, not float/double).
 *           for example, for a price of us$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it shows
 *           the number of digits past the decimal point for each currency (2 for the majority of currencies).
 * @property string    $invoicePayload   bot specified invoice payload
 * @property string    $shippingOptionId optional. identifier of the shipping option chosen by the user
 * @property OrderInfo $orderInfo        optional. order info provided by the user
 * @package realSamy\reBot\Abstracts
 */
abstract class PreCheckoutQuery
{
}