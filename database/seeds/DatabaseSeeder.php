<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CommentmetaTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(LinksTableSeeder::class);
        $this->call(OptionsTableSeeder::class);
        $this->call(PostmetaTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(TermmetaTableSeeder::class);
        $this->call(TermsTableSeeder::class);
        $this->call(TermRelationshipsTableSeeder::class);
        $this->call(TermTaxonomyTableSeeder::class);
        $this->call(UsermetaTableSeeder::class);
    }
}
