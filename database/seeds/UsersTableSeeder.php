<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'ID' => 1,
                'user_login' => 'madnesslabs',
                'user_pass' => '$P$BGwrkh7nt4wer/7Fj74WWp1OHEp6nE.',
                'user_nicename' => 'madnesslabs',
                'user_email' => 'info@madnesslabs.net',
                'user_url' => '',
                'user_registered' => '2017-01-09 19:23:32',
                'user_activation_key' => '',
                'user_status' => 0,
                'display_name' => 'madnesslabs',
            ),
        ));
        
        
    }
}