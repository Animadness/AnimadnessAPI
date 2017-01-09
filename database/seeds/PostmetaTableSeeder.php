<?php

use Illuminate\Database\Seeder;

class PostmetaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('postmeta')->delete();
        
        \DB::table('postmeta')->insert(array (
            0 => 
            array (
                'meta_id' => 1,
                'post_id' => 2,
                'meta_key' => '_wp_page_template',
                'meta_value' => 'default',
            ),
        ));
        
        
    }
}