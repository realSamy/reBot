<?php

namespace realSamy\reBot\Abstracts;
/**
 * Contains information about Telegram Passport data shared with the bot by the user.
 *
 * @property EncryptedPassportElement $data        array with information about documents and other telegram passport
 *           elements that was shared with the bot
 * @property EncryptedCredentials     $credentials encrypted credentials required to decrypt the data
 * @package realSamy\reBot\Abstracts
 */
abstract class PassportData
{
}