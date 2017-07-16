<?php

use Phinx\Seed\AbstractSeed;

class SecurityMenuSeeder extends AbstractSeed
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
                'show_in_menu' => 0,
                'menu_position' => 0,
                'ip_restricted' => 0,
                'page_name' => ''
            ),
            array(
                'page_url' => '/help',
                'show_in_menu' => 0,
                'menu_position' => 0,
                'ip_restricted' => 0,
                'page_name' => ''
            ),
            array(
                'page_url' => 'home',
                'show_in_menu' => 1,
                'menu_position' => 0,
                'ip_restricted' => 0,
                'page_name' => ''
            ),

        );

        $posts = $this->table('security_menu');

        $posts->truncate();

        $posts->insert($data)
            ->save();
    }
}
