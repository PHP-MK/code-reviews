<?php
declare(strict_types = 1);

namespace WPS\Package\Target;

use WPS\Time\Period;

/**
 * Provides means to create targets
 *
 * @package WPS\Package\PeriodHours
 */
class Factory
{
    /**
     * Reconstitutes a target from SQL data representation
     *
     * @param array $data In SQL format (the period_hours_target table)
     *
     * @return Target
     */
    public function fromStorage(array $data): Target
    {
        $timezone = new \DateTimeZone('UTC');
        return new Target(
            (int) $data['reference_period_id'],
            new Period(
                new \DateTime($data['date_from'], $timezone),
                new \DateTime($data['date_to'], $timezone)
            ),
            (int) $data['hours']
        );
    }
}
