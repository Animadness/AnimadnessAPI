<?php

use Illuminate\Database\Seeder;

class TermRelationshipsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('term_relationships')->delete();
        
        \DB::table('term_relationships')->insert(array (
            0 => 
            array (
                'object_id' => 1,
                'term_taxonomy_id' => 1,
                'term_order' => 0,
            ),
        ));
        
        
    }
}