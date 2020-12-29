<?php

namespace realSamy\reBot\Abstracts;
/**
 * Contains data required for decrypting and authenticating EncryptedPassportElement. See the Telegram Passport
 * Documentation for a complete description of the data decryption and authentication processes.
 *
 * @property string $data   base64-encoded encrypted json-serialized data with unique user's payload, data hashes and
 *           secrets required for encryptedpassportelement decryption and authentication
 * @property string $hash   base64-encoded data hash for data authentication
 * @property string $secret base64-encoded secret, encrypted with the bot's public rsa key, required for data
 *           decryption
 * @package realSamy\reBot\Abstracts
 */
abstract class EncryptedCredentials
{
}