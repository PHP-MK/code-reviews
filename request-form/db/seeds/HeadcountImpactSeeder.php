<?php

use Phinx\Seed\AbstractSeed;

class HeadcountImpactSeeder extends AbstractSeed
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
                'impact' => 'No Impact',
                'active' =>1
            ),
            array(
                'impact' => 'Increase',
                'active' =>1
            ),
            array(
                'impact' => 'Reduction',
                'active' =>1
            )
        );

        $posts = $this->table('headcount_impacts');

        $posts->truncate();

        $posts->insert($data)
            ->save();
    }
}
