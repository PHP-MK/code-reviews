<?php

use Phinx\Seed\AbstractSeed;

class SecuritypagesSeeder extends AbstractSeed
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
                'page_url' => '/systems',
                'group_id' => -1,

            ),
            array(
                'page_url' => '/help',
                'group_id' => -1
            ),
            array(
                'page_url' => 'home',
                'group_id' => 2
            ),

        );

        $posts = $this->table('security_pages');

        $posts->truncate();

        $posts->insert($data)
            ->save();
    }
}
