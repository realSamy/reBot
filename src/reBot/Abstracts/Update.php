<?php

namespace realSamy\reBot\Abstracts;
/**
 * Class Update
 *
 * @property integer            $updateId             the update's unique identifier. update identifiers start from a
 *           certain positive number and increase sequentially. this id becomes especially handy if you're using
 *           webhooks, since it allows you to ignore repeated updates or to restore the correct update sequence, should
 *           they get out of order. if there are no new updates for at least a week, then identifier of the next update
 *           will be chosen randomly instead of sequentially.
 * @property Message            $message              optional. new incoming message of any kind — text, photo,
 *           sticker, etc.
 * @property Message            $editedMessage        optional. new version of a message that is known to the bot and
 *           was edited
 * @property Message            $channelPost          optional. new incoming channel post of any kind — text, photo,
 *           sticker, etc.
 * @property Message            $editedChannelPost    optional. new version of a channel post that is known to the bot
 *           and was edited
 * @property InlineQuery        $inlineQuery          optional. new incoming inline query
 * @property ChosenInlineResult $chosenInlineResult   optional. the result of an inline query that was chosen by a user
 *           and sent to their chat partner. please see our documentation on the feedback collecting for details on how
 *           to enable these updates for your bot.
 * @property CallbackQuery      $callbackQuery        optional. new incoming callback query
 * @property ShippingQuery      $shippingQuery        optional. new incoming shipping query. only for invoices with
 *           flexible price
 * @property PreCheckoutQuery   $preCheckoutQuery     optional. new incoming pre-checkout query. contains full
 *           information about checkout
 * @property poll               $poll                 optional. new poll state. bots receive only updates about stopped
 *           polls and polls, which are sent by the bot
 * @property pollanswer         $pollAnswer           optional. a user changed their answer in a non-anonymous poll.
 *           bots receive new votes only in polls that were sent by the bot itself.
 * @package realSamy\reBot\Abstracts
 */
abstract class Update
{
}