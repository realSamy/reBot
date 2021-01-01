<?php

namespace realSamy\reBot\Abstracts;
/**
 * This object represents an answer of a user in a non-anonymous poll.
 *
 * @property string $poll_id     unique poll identifier
 * @property user   $user       the user, who changed the answer to the poll
 * @property array  $option_ids  of integer    0-based identifiers of answer options, chosen by the user. May be empty
 *           if the user retracted their vote.
 * @package realSamy\reBot\Abstracts
 */
abstract class PollAnswer
{
}