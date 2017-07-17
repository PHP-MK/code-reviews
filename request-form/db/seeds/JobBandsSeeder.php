<?php

use Phinx\Seed\AbstractSeed;

class JobBandsSeeder extends AbstractSeed
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
                'job_band' => 'Band 1',
                'active' =>1
            ),
            array(
                'job_band' => 'Band 2',
                'active' =>1
            ),
            array(
                'job_band' => 'Band 3A',
                'active' =>1
            ),
            array(
                'job_band' => 'Band 3B',
                'active' =>1
            ),
            array(
                'job_band' => 'Band 3C',
                'active' =>1
            ),
            array(
                'job_band' => 'Band 4A',
                'active' =>1
            ),
            array(
                'job_band' => 'Band 4B',
                'active' =>1
            ),
            array(
                'job_band' => 'Band 4C',
                'active' =>1
            ),
            array(
                'job_band' => 'Band 5',
                'active' =>1
            ),
            array(
                'job_band' => 'Band 6',
                'active' =>1
            ),
            array(
                'job_band' => 'Band 7',
                'active' =>1
            ),
            array(
                'job_band' => 'Band 8',
                'active' =>1
            ),
            array(
                'job_band' => 'N/A',
                'active' =>1
            ),


        );

        $posts = $this->table('job_bands');

        $posts->truncate();

        $posts->insert($data)
            ->save();
    }
}
