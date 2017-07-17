<?php

use Phinx\Seed\AbstractSeed;

class RequirementReasonsSeeder extends AbstractSeed
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
                'reason' => 'Example data 1',
                'active' =>1
            ),
            array(
                'reason' => 'Example data 2',
                'active' =>1
            ),
            array(
                'reason' => 'Example data 3',
                'active' =>1
            )
        );

        $posts = $this->table('requirement_reasons');

        $posts->truncate();

        $posts->insert($data)
            ->save();
    }
}
