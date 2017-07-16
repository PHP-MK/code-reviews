<?php

use Phinx\Seed\AbstractSeed;

class SecuritySettingsSeeder extends AbstractSeed
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
        $data = array(
            array('id' => '1',
                'setting' => 'system_title',
                'setting_name' => 'System Title',
                'value' => 'ROCAP (Resourcing & Organization Change Approval Panel)',
                'type' => 'text',
                'options' => '',
                'required' => '1',
                'tooltip' => '',
                'order' => '1',
                'setting_type' => 'General Settings'),
            array('id' => '2',
                'setting' => 'nsc_email',
                'setting_name' => 'NSC Email Address',
                'value' => 'nscsystemsdevelopment@networkrail.co.uk,lukasz.dembowski@networkrail.co.uk',
                'type' => 'text',
                'options' => '',
                'required' => '1',
                'tooltip' => '',
                'order' => '6',
                'setting_type' => 'General Settings'),
            array('id' => '3',
                'setting' => 'system_version',
                'setting_name' => 'System Version',
                'value' => '1.0.0',
                'type' => 'text',
                'options' => '',
                'required' => '1',
                'tooltip' => '',
                'order' => '2',
                'setting_type' => 'General Settings'),
            array('id' => '5',
                'setting' => 'system_release',
                'setting_name' => 'System Release',
                'value' => 'RC','type' => 'radio',
                'options' => 'Alpha=>Alpha|Beta=>Beta|RC=>RC|Stable=>Stable',
                'required' => '0',
                'tooltip' => '',
                'order' => '3',
                'setting_type' => 'General Settings'),
            array('id' => '6',
                'setting' => 'debug_email',
                'setting_name' => 'Debug Email',
                'value' => '1',
                'type' => 'radio',
                'options' => '0=>False|1=>True',
                'required' => '0',
                'tooltip' => '',
                'order' => '4',
                'setting_type' => 'General Settings'),
            array('id' => '7',
                'setting' => 'debug_email_To',
                'setting_name' => 'Debug Email To',
                'value' => 'nscsystemsdevelopment@networkrail.co.uk,lukasz.dembowski@networkrail.co.uk',
                'type' => 'text',
                'options' => '',
                'required' => '1',
                'tooltip' => '',
                'order' => '5',
                'setting_type' => 'General Settings'),
            array('id' => '8',
                'setting' => 'show_status_message',
                'setting_name' => 'Show Status Message',
                'value' => '0',
                'type' => 'radio',
                'options' => '1=>Yes|0=>No',
                'required' => '0',
                'tooltip' => '',
                'order' => '11',
                'setting_type' => 'Status Message'),
            array('id' => '9',
                'setting' => 'security_disabled',
                'setting_name' => 'Site Enabled for all users',
                'value' => '1',
                'type' => 'radio',
                'options' => '1=>Yes|0=>No',
                'required' => '0',
                'tooltip' => '',
                'order' => '8',
                'setting_type' => 'Security'),
            array('id' => '10',
                'setting' => 'ip_restricted',
                'setting_name' => 'Site restricted to Network Rail IP addresses',
                'value' => '0',
                'type' => 'radio',
                'options' => '1=>Yes|0=>No',
                'required' => '0',
                'tooltip' => '',
                'order' => '9',
                'setting_type' => 'Security'),
            array('id' => '11',
                'setting' => 'allowed_ip_addresses',
                'setting_name' => 'Allow Extra IP addresses',
                'value' => '',
                'type' => 'text',
                'options' => '',
                'required' => '0',
                'tooltip' => '',
                'order' => '10',
                'setting_type' => 'Security'),
            array('id' => '12',
                'setting' => 'site_enabled',
                'setting_name' => 'Site Enabled Status',
                'value' => '1',
                'type' => 'radio',
                'options' => '1=>Live|0=>Offline|2=>Developer Mode=>',
                'required' => '0',
                'tooltip' => '',
                'order' => '7',
                'setting_type' => 'General Settings'),
            array('id' => '13',
                'setting' => 'system_status_message',
                'setting_name' => 'System Status Message',
                'value' => 'test',
                'type' => 'text',
                'options' => '',
                'required' => '0',
                'tooltip' => '',
                'order' => '12',
                'setting_type' => 'Status Message')
        );


        $posts = $this->table('security_settings');

        $posts->truncate();

        $posts->insert($data)
            ->save();
    }
}
