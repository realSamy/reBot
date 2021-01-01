<?php

namespace realSamy\reBot\Abstracts;
/**
 * This object contains basic information about an invoice.
 *
 * @property string  $title           product name
 * @property string  $description     product description
 * @property string  $start_parameter  unique bot deep-linking parameter that can be used to generate this invoice
 * @property string  $currency        three-letter iso 4217 currency code
 * @property integer $total_amount     total price in the smallest units of the currency (integer, not float/double).
 *           for example, for a price of us$ 1.45 pass amount = 145. see the exp parameter in currencies.json, it shows
 *           the number of digits past the decimal point for each currency (2 for the majority of currencies).
 * @package realSamy\reBot\Abstracts
 */
abstract class Invoice
{
}