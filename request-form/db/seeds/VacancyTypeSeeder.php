<?php

use Phinx\Seed\AbstractSeed;

class VacancyTypeSeeder extends AbstractSeed
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
                'vacancy_type' => 'Permanent',
                'active' =>1
            ),
            array(
                'vacancy_type' => 'Fixed term employee / secondment',
                'active' =>1
            ),
            array(
                'vacancy_type' => 'Fixed term employee / secondment extension',
                'active' =>1
            ),
            array(
                'vacancy_type' => 'Contractor (day rate)',
                'active' =>1
            ),
            array(
                'vacancy_type' => 'Contractor extension (day rate)',
                'active' =>1
            )
        );

        $posts = $this->table('vacancy_types');

        $posts->truncate();

        $posts->insert($data)
            ->save();
    }
}
