<?php

use Phinx\Seed\AbstractSeed;

class SecurityGroupsSeeder extends AbstractSeed
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
                'group_name' => 'User',
                'active' =>1
            ),
            array(
                'group_name' => 'Admin',
                'active' =>1
            )
        );

        $posts = $this->table('security_groups');

        $posts->truncate();

        $posts->insert($data)
            ->save();
    }
}
