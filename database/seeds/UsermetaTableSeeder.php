<?php

use Illuminate\Database\Seeder;

class UsermetaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('usermeta')->delete();
        
        \DB::table('usermeta')->insert(array (
            0 => 
            array (
                'umeta_id' => 1,
                'user_id' => 1,
                'meta_key' => 'nickname',
                'meta_value' => 'madnesslabs',
            ),
            1 => 
            array (
                'umeta_id' => 2,
                'user_id' => 1,
                'meta_key' => 'first_name',
                'meta_value' => '',
            ),
            2 => 
            array (
                'umeta_id' => 3,
                'user_id' => 1,
                'meta_key' => 'last_name',
                'meta_value' => '',
            ),
            3 => 
            array (
                'umeta_id' => 4,
                'user_id' => 1,
                'meta_key' => 'description',
                'meta_value' => '',
            ),
            4 => 
            array (
                'umeta_id' => 5,
                'user_id' => 1,
                'meta_key' => 'rich_editing',
                'meta_value' => 'true',
            ),
            5 => 
            array (
                'umeta_id' => 6,
                'user_id' => 1,
                'meta_key' => 'comment_shortcuts',
                'meta_value' => 'false',
            ),
            6 => 
            array (
                'umeta_id' => 7,
                'user_id' => 1,
                'meta_key' => 'admin_color',
                'meta_value' => 'fresh',
            ),
            7 => 
            array (
                'umeta_id' => 8,
                'user_id' => 1,
                'meta_key' => 'use_ssl',
                'meta_value' => '0',
            ),
            8 => 
            array (
                'umeta_id' => 9,
                'user_id' => 1,
                'meta_key' => 'show_admin_bar_front',
                'meta_value' => 'true',
            ),
            9 => 
            array (
                'umeta_id' => 10,
                'user_id' => 1,
                'meta_key' => 'locale',
                'meta_value' => '',
            ),
            10 => 
            array (
                'umeta_id' => 11,
                'user_id' => 1,
                'meta_key' => 'wp_capabilities',
                'meta_value' => 'a:1:{s:13:"administrator";b:1;}',
            ),
            11 => 
            array (
                'umeta_id' => 12,
                'user_id' => 1,
                'meta_key' => 'wp_user_level',
                'meta_value' => '10',
            ),
            12 => 
            array (
                'umeta_id' => 13,
                'user_id' => 1,
                'meta_key' => 'dismissed_wp_pointers',
                'meta_value' => '',
            ),
            13 => 
            array (
                'umeta_id' => 14,
                'user_id' => 1,
                'meta_key' => 'show_welcome_panel',
                'meta_value' => '1',
            ),
            14 => 
            array (
                'umeta_id' => 15,
                'user_id' => 1,
                'meta_key' => 'session_tokens',
            'meta_value' => 'a:3:{s:64:"732e7ef41462a41586223ffdc9c9c022d6557849f2f3a71196f2ad00f4f93420";a:4:{s:10:"expiration";i:1485199414;s:2:"ip";s:9:"127.0.0.1";s:2:"ua";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36";s:5:"login";i:1483989814;}s:64:"3da5ac835713761773396c6bf9c18b304baa4a582fe3765b630114cea453d9a6";a:4:{s:10:"expiration";i:1484162652;s:2:"ip";s:9:"127.0.0.1";s:2:"ua";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36";s:5:"login";i:1483989852;}s:64:"0161c5cd7749b5ce3267344d3bd6f01e4607c1215f44514bae6eddcb1a38acae";a:4:{s:10:"expiration";i:1484168686;s:2:"ip";s:9:"127.0.0.1";s:2:"ua";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36";s:5:"login";i:1483995886;}}',
            ),
            15 => 
            array (
                'umeta_id' => 16,
                'user_id' => 1,
                'meta_key' => 'wp_dashboard_quick_press_last_post_id',
                'meta_value' => '3',
            ),
        ));
        
        
    }
}