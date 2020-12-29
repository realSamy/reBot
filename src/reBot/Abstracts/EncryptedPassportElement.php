<?php

namespace realSamy\reBot\Abstracts;
/**
 * Contains information about documents or other Telegram Passport elements shared with the bot by the user.
 *
 * @property string         $type         element type. one of “personal_details”, “passport”, “driver_license”,
 *           “identity_card”, “internal_passport”, “address”, “utility_bill”, “bank_statement”, “rental_agreement”,
 *           “passport_registration”, “temporary_registration”, “phone_number”, “email”.
 * @property string         $data         optional. base64-encoded encrypted telegram passport element data provided by
 *           the user, available for “personal_details”, “passport”, “driver_license”, “identity_card”,
 *           “internal_passport” and “address” types. can be decrypted and verified using the accompanying
 *           encryptedcredentials.
 * @property string         $phoneNumber  optional. user's verified phone number, available only for “phone_number”
 *           type
 * @property string         $email        optional. user's verified email address, available only for “email” type
 * @property PassportFile[] $files        optional. array of encrypted files with documents provided by the user,
 *           available for “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration” and
 *           “temporary_registration” types. files can be decrypted and verified using the accompanying
 *           encryptedcredentials.
 * @property PassportFile   $frontSide    optional. encrypted file with the front side of the document, provided by the
 *           user. available for “passport”, “driver_license”, “identity_card” and “internal_passport”. the file can be
 *           decrypted and verified using the accompanying encryptedcredentials.
 * @property PassportFile   $reverseSide  optional. encrypted file with the reverse side of the document, provided by
 *           the user. available for “driver_license” and “identity_card”. the file can be decrypted and verified using
 *           the accompanying encryptedcredentials.
 * @property PassportFile   $selfie       optional. encrypted file with the selfie of the user holding a document,
 *           provided by the user; available for “passport”, “driver_license”, “identity_card” and “internal_passport”.
 *           the file can be decrypted and verified using the accompanying encryptedcredentials.
 * @property PassportFile[] $translation  optional. array of encrypted files with translated versions of documents
 *           provided by the user. available if requested for “passport”, “driver_license”, “identity_card”,
 *           “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration” and
 *           “temporary_registration” types. files can be decrypted and verified using the accompanying
 *           encryptedcredentials.
 * @property string         $hash         base64-encoded element hash for using in passportelementerrorunspecified
 * @package realSamy\reBot\Abstracts
 */
abstract class EncryptedPassportElement
{
}