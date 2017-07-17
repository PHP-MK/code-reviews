<?php

use Phinx\Seed\AbstractSeed;

class SafetyCriticalSeeder extends AbstractSeed
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
                'safety_critical' => 'Yes',
                'active' =>1
            ),
            array(
                'safety_critical' => 'No',
                'active' =>1
            )
        );

        $posts = $this->table('safety_critical');

        $posts->truncate();

        $posts->insert($data)
            ->save();
    }
}
