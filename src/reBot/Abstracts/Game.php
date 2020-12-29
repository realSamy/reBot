<?php

namespace realSamy\reBot\Abstracts;
/**
 * This object represents a game. Use BotFather to create and edit games, their short names will act as unique
 * identifiers.
 *
 * @property string        $title         title of the game
 * @property string        $description   description of the game
 * @property PhotoSize     $photo         photo that will be displayed in the game message in chats.
 * @property string        $text          optional. brief description of the game or high scores included in the game
 *           message. can be automatically edited to include current high scores for the game when the bot calls
 *           setgamescore, or manually edited using editmessagetext. 0-4096 characters.
 * @property MessageEntity $textEntities  optional. special entities that appear in text, such as usernames, urls, bot
 *           commands, etc.
 * @property animation     $animation     optional. animation that will be displayed in the game message in chats.
 *           upload via botfather
 * @package realSamy\reBot\Abstracts
 */
abstract class Game
{
}