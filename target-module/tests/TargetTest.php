<?php
declare(strict_types=1);

namespace WPS\Package\PeriodHours\Target;

use WPS\TestCase;
use WPS\Time\Period;

/**
 * Tests target entity
 *
 * @package WPS\Package\PeriodHours
 */
class TargetTest extends TestCase
{
    /**
     * Tests if an exception will be thrown if an invalid argument is provided
     *
     * @param int $referencePeriodId Reference period identifier
     *
     * @expectedException \WPS\Package\PeriodHours\Target\InvalidArgumentException
     * @dataProvider invalidArgumentProvidedDataProvider
     */
    public function testInvalidArgumentProvided(int $referencePeriodId)
    {
        $timezone = new \DateTimeZone('UTC');
        new Target(
            $referencePeriodId,
            new Period(new \DateTime('2016-06-06', $timezone), new \DateTime('2016-06-10', $timezone)),
            10
        );
    }

    /**
     * Provides data for testInvalidArgumentProvided
     *
     * @return array
     */
    public function invalidArgumentProvidedDataProvider(): array
    {
        return [
            [0],
            [-1],
        ];
    }

    /**
     * Tests creation of a new instance of Target
     *
     * @param array $params   Constructor params
     * @param array $expected Expected values to be returned by getters
     *
     * @dataProvider dataProviderTestTargetConstructor
     */
    public function testTargetConstructor(array $params, array $expected)
    {
        $target = new Target(...$params);
        $this->assertSame($expected['referencePeriodId'], $target->getReferencePeriodId());
        $this->assertSame($expected['period'], $target->getPeriod());
        $this->assertEquals($expected['hours'], $target->getHours());
    }

    /**
     * Provides data for testTargetConstructor
     *
     * @return array
     */
    public function dataProviderTestTargetConstructor(): array
    {
        $timezone = new \DateTimeZone('UTC');
        $referencePeriodId = 10;
        $period = new Period(
            new \DateTime('2016-06-06', $timezone),
            new \DateTime('2016-06-12', $timezone)
        );
        $hours = 100;

        return [
            [
                [$referencePeriodId, $period, $hours],
                [
                    'referencePeriodId' => 10,
                    'period'            => $period,
                    'hours'             => $hours,
                ],
            ],
        ];
    }
}
