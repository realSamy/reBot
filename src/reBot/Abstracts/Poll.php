<?php

namespace realSamy\reBot\Abstracts;
/**
 * This object contains information about a poll.
 *
 * @property string  $id                      unique poll identifier
 * @property string  $question                poll question, 1-255 characters
 * @property array   $options                 of polloption    list of poll options
 * @property integer $totalVoterCount         total number of users that voted in the poll
 * @property boolean $isClosed                true, if the poll is closed
 * @property boolean $isAnonymous             true, if the poll is anonymous
 * @property string  $type                    poll type, currently can be “regular” or “quiz”
 * @property boolean $allowsMultipleAnswers   true, if the poll allows multiple answers
 * @property integer $correctOptionId         optional. 0-based identifier of the correct answer option. available only
 *           for polls in the quiz mode, which are closed, or was sent (not forwarded) by the bot or to the private
 *           chat with the bot.
 * @property string  $explanation             optional. text that is shown when a user chooses an incorrect answer or
 *           taps on the lamp icon in a quiz-style poll, 0-200 characters
 * @property array   $explanationEntities     of messageentity    optional. special entities like usernames, urls, bot
 *           commands, etc. that appear in the explanation
 * @property integer $openPeriod              optional. amount of time in seconds the poll will be active after
 *           creation
 * @property integer $closeDate               optional. point in time (unix timestamp) when the poll will be
 *           automatically closed
 * @package realSamy\reBot\Abstracts
 */
abstract class Poll
{
}