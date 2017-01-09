<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('comments')->delete();
        
        \DB::table('comments')->insert(array (
            0 => 
            array (
                'comment_ID' => 1,
                'comment_post_ID' => 1,
                'comment_author' => 'A WordPress Commenter',
                'comment_author_email' => 'wapuu@wordpress.example',
                'comment_author_url' => 'https://wordpress.org/',
                'comment_author_IP' => '',
                'comment_date' => '2017-01-09 19:23:32',
                'comment_date_gmt' => '2017-01-09 19:23:32',
                'comment_content' => 'Hi, this is a comment.
To get started with moderating, editing, and deleting comments, please visit the Comments screen in the dashboard.
Commenter avatars come from <a href="https://gravatar.com">Gravatar</a>.',
                'comment_karma' => 0,
                'comment_approved' => '1',
                'comment_agent' => '',
                'comment_type' => '',
                'comment_parent' => 0,
                'user_id' => 0,
            ),
        ));
        
        
    }
}