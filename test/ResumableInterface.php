<?php

/**
 * Resumable loop test interface.
 *
 * @author    Daniil Gentili <daniil@daniil.it>
 * @copyright 2016-2020 Daniil Gentili <daniil@daniil.it>
 * @license   https://opensource.org/licenses/MIT MIT
 */

namespace danog\Loop\Test;

use danog\Loop\ResumableLoopInterface;

/**
 * Resumable loop test interface.
 *
 * @author Daniil Gentili <daniil@daniil.it>
 */
interface ResumableInterface extends BasicInterface, ResumableLoopInterface
{
    /**
     * Set sleep interval.
     *
     * @param ?int $interval Interval
     *
     * @return void
     */
    public function setInterval($interval): void;
}
