<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('posts')->delete();
        
        \DB::table('posts')->insert(array (
            0 => 
            array (
                'ID' => 1,
                'post_author' => 1,
                'post_date' => '2017-01-09 19:23:32',
                'post_date_gmt' => '2017-01-09 19:23:32',
                'post_content' => 'Welcome to WordPress. This is your first post. Edit or delete it, then start writing!',
                'post_title' => 'Hello world!',
                'post_excerpt' => '',
                'post_status' => 'publish',
                'comment_status' => 'open',
                'ping_status' => 'open',
                'post_password' => '',
                'post_name' => 'hello-world',
                'to_ping' => '',
                'pinged' => '',
                'post_modified' => '2017-01-09 19:23:32',
                'post_modified_gmt' => '2017-01-09 19:23:32',
                'post_content_filtered' => '',
                'post_parent' => 0,
                'guid' => 'http://api.animadness.dev/wordpress/?p=1',
                'menu_order' => 0,
                'post_type' => 'post',
                'post_mime_type' => '',
                'comment_count' => 1,
            ),
            1 => 
            array (
                'ID' => 2,
                'post_author' => 1,
                'post_date' => '2017-01-09 19:23:32',
                'post_date_gmt' => '2017-01-09 19:23:32',
            'post_content' => 'This is an example page. It\'s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:

<blockquote>Hi there! I\'m a bike messenger by day, aspiring actor by night, and this is my website. I live in Los Angeles, have a great dog named Jack, and I like pi&#241;a coladas. (And gettin\' caught in the rain.)</blockquote>

...or something like this:

<blockquote>The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</blockquote>

As a new WordPress user, you should go to <a href="http://api.animadness.dev/wordpress/wp-admin/">your dashboard</a> to delete this page and create new pages for your content. Have fun!',
                'post_title' => 'Sample Page',
                'post_excerpt' => '',
                'post_status' => 'publish',
                'comment_status' => 'closed',
                'ping_status' => 'open',
                'post_password' => '',
                'post_name' => 'sample-page',
                'to_ping' => '',
                'pinged' => '',
                'post_modified' => '2017-01-09 19:23:32',
                'post_modified_gmt' => '2017-01-09 19:23:32',
                'post_content_filtered' => '',
                'post_parent' => 0,
                'guid' => 'http://api.animadness.dev/wordpress/?page_id=2',
                'menu_order' => 0,
                'post_type' => 'page',
                'post_mime_type' => '',
                'comment_count' => 0,
            ),
        ));
        
        
    }
}