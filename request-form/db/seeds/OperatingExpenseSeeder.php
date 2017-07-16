<?php

use Phinx\Seed\AbstractSeed;

class OperatingExpenseSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $data = array (
            array(
                'operating_expense' => 'CAPEX',
                'active' =>1
            ),
            array(
                'operating_expense' => 'OPEX',
                'active' =>1
            ),
            array(
                'operating_expense' => 'Both',
                'active' =>1
            )

        );

        $posts = $this->table('operating_expenses');

        $posts->truncate();

        $posts->insert($data)
            ->save();
    }
}
