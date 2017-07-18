<?php
declare(strict_types = 1);

namespace WPS\Package\Target;

use WPS\Time\Period;

/**
 * This entity represents the target number of hours within a date period.
 *
 */
class Target
{
    /** @var int Reference period identifier the target belongs to */
    private $referencePeriodId;

    /** @var Period The period for which the target is relevant */
    private $period;

    /** @var int Target hours */
    private $hours;

    /**
     * Target constructor.
     *
     * @param int    $referencePeriodId Reference period identifier the target belongs to
     * @param Period $period            The period for which the target is relevant
     * @param int    $hours             Target hours
     *
     * @throws InvalidArgumentException Thrown when referencePeriodId is invalid (< 0)
     */
    public function __construct(int $referencePeriodId, Period $period, int $hours)
    {
        if ($referencePeriodId <= 0) {
            throw new InvalidArgumentException('The reference period id must be greater than 0');
        }
        
        $this->referencePeriodId = $referencePeriodId;
        $this->period = $period;
        $this->hours = $hours;
    }

    /**
     * Returns the reference period identifier
     *
     * @return int
     */
    public function getReferencePeriodId(): int
    {
        return $this->referencePeriodId;
    }

    /**
     * Return the period that the target spans
     *
     * @return Period
     */
    public function getPeriod(): Period
    {
        return $this->period;
    }

    /**
     * Returns Target hours
     *
     * @return int
     */
    public function getHours(): int
    {
        return $this->hours;
    }
}
