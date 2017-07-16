<?php

use Phinx\Seed\AbstractSeed;

class StatutorySeeder extends AbstractSeed
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
                'statutory' => 'Yes',
                'active' =>1
            ),
            array(
                'statutory' => 'No',
                'active' =>1
            )
        );

        $posts = $this->table('statutory');

        $posts->truncate();

        $posts->insert($data)
            ->save();
    }
}
