<?php

use Illuminate\Database\Seeder;

class TermsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('terms')->delete();
        
        \DB::table('terms')->insert(array (
            0 => 
            array (
                'term_id' => 1,
                'name' => 'Uncategorized',
                'slug' => 'uncategorized',
                'term_group' => 0,
            ),
        ));
        
        
    }
}