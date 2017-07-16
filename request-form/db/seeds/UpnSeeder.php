<?php

use Phinx\Seed\AbstractSeed;

class UpnSeeder extends AbstractSeed
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
                'upn' => 'Example data 1',
                'active' =>1
            ),
            array(
                'upn' => 'Example data 2',
                'active' =>1
            ),
            array(
                'upn' => 'Example data 3',
                'active' =>1
            )
        );

        $posts = $this->table('upns');

        $posts->truncate();

        $posts->insert($data)
            ->save();
    }
}
