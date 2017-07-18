<?php
declare(strict_types=1);

namespace WPS\Package\Target;

use WPS\TestCase;
use WPS\Time\Period;

/**
 * Test the target entity factory class
 */
class FactoryTest extends TestCase
{

    /**
     * Test that the target entity can be correctly created from the storage mechanism
     *
     * @param array  $data     Target data from storage
     * @param Target $expected Expected entity to be constructed
     *
     * @return void
     *
     * @dataProvider fromStorageDataProvider
     */
    public function testFromStorage(array $data, Target $expected)
    {
        $factory = new Factory();
        $entity = $factory->fromStorage($data);

        $this->assertEquals($expected->getReferencePeriodId(), $entity->getReferencePeriodId());
        $this->assertEquals($expected->getPeriod(), $entity->getPeriod());
        $this->assertEquals($expected->getHours(), $entity->getHours());
    }

    /**
     * Scenarios for fromData construction method
     *
     * @return array
     */
    public function fromStorageDataProvider(): array
    {
        return [
            [
                [
                    'reference_period_id' => 1,
                    'date_from'           => '2017-01-01',
                    'date_to'             => '2017-01-07',
                    'hours'               => 12
                ],
                new Target(
                    1,
                    new Period(new \DateTime('2017-01-01'), new \DateTime('2017-01-07')),
                    12
                )
            ],
            [
                [
                    'reference_period_id' => 14,
                    'date_from'           => '2017-02-11',
                    'date_to'             => '2017-03-22',
                    'hours'               => 45
                ],
                new Target(
                    14,
                    new Period(new \DateTime('2017-02-11'), new \DateTime('2017-03-22')),
                    45
                )
            ]
        ];
    }
}
