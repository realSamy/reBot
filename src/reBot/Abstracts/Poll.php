<?php

namespace realSamy\reBot\Abstracts;
/**
 * This object contains information about a poll.
 *
 * @property string  $id                      unique poll identifier
 * @property string  $question                poll question, 1-255 characters
 * @property array   $options                 of polloption    list of poll options
 * @property integer $total_voter_count         total number of users that voted in the poll
 * @property boolean $is_closed                true, if the poll is closed
 * @property boolean $is_anonymous             true, if the poll is anonymous
 * @property string  $type                    poll type, currently can be “regular” or “quiz”
 * @property boolean $allows_multiple_answers   true, if the poll allows multiple answers
 * @property integer $correct_option_id         optional. 0-based identifier of the correct answer option. available only
 *           for polls in the quiz mode, which are closed, or was sent (not forwarded) by the bot or to the private
 *           chat with the bot.
 * @property string  $explanation             optional. text that is shown when a user chooses an incorrect answer or
 *           taps on the lamp icon in a quiz-style poll, 0-200 characters
 * @property array   $explanation_entities     of messageentity    optional. special entities like usernames, urls, bot
 *           commands, etc. that appear in the explanation
 * @property integer $open_period              optional. amount of time in seconds the poll will be active after
 *           creation
 * @property integer $close_date               optional. point in time (unix timestamp) when the poll will be
 *           automatically closed
 * @package realSamy\reBot\Abstracts
 */
abstract class Poll
{
}