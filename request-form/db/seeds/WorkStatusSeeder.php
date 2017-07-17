<?php

use Phinx\Seed\AbstractSeed;

class WorkStatusSeeder extends AbstractSeed
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
                'work_status' => 'Full Time',
                'active' =>1
            ),
            array(
                'work_status' => 'Part Time',
                'active' =>1
            ),
            array(
                'work_status' => 'Either',
                'active' =>1
            )
        );

        $posts = $this->table('work_statuses');

        $posts->truncate();

        $posts->insert($data)
            ->save();
    }
}
