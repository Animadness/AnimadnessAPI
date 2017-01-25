<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post as Post;
use App\PostMeta as PostMeta;
use Twitter;
use File;
use App\TermRelation as TermRelation;
use Carbon\Carbon;

class AnimeController extends Controller
{

    public function approve(Request $request) {
        // Make Blog Post Draft
        $title = 'Watch '.$request->input('anime', '').' now on Animadness';
        $post = $request->input('blog') ? Post::find($request->input('blog')) : new Post;
        $post->post_author = $request->input('author', 1);
        $post->post_type = $request->input('type', 'post');
        $post->post_status = $request->input('status', 'draft');
        $post->post_title = $request->input('title', $title);
        $post->post_name = $request->input('name', str_replace('.', '-', str_replace(' ', '-', strtolower($title))));
        $post->post_content = $request->input('content') ? urldecode($request->input('content')) : '';
        if ($request->input('date')) {
            $post->post_date =  Carbon::parse($request->input('date'))->tz('-5');
            $post->post_date_gmt = Carbon::parse($request->input('date'))->tz('-5');
        } else {
            $post->post_date = $post->post_date_gmt = Carbon::now()->tz('-5');
        }
        $post->save();

        // Set Featured Image
        $featuredImage = $this->setFeaturedImage($post->ID, $request->input('image'), str_replace('.', '-', str_replace(' ', '-', strtolower($title))).'-Featured.jpg');
        
        if (!$request->input('blog')) {
            // Set to Photo Type
            $termRelation = new TermRelation;
            $termRelation->object_id = $post->ID;
            $termRelation->term_taxonomy_id = env('APP_ENV', 'local') === 'local' ? 2 : 3;
            $termRelation->save();

            // Set Anime Category
            $termRelation = new TermRelation;
            $termRelation->object_id = $post->ID;
            $termRelation->term_taxonomy_id = env('APP_ENV', 'local') === 'local' ? 6 : 5;
            $termRelation->save();

            // Set Anime Tag
            $termRelation = new TermRelation;
            $termRelation->object_id = $post->ID;
            $termRelation->term_taxonomy_id = env('APP_ENV', 'local') === 'local' ? 7 : 6;
            $termRelation->save();
        }

        // Format Social Posts
        $snapPost = [
            "do" => 1,
            "msgFormat" => "%TITLE%\rhttps://animadness.net/#/anime/".$request->input('id')."\r\n\r\n%FULLTEXT%",
            "postType" => "I",
            "isAutoImg" => "A",
            "imgToUse" => "",
            "isAutoURL" => "A",
            "urlToUse" => ""
        ];

        // Set Facebook Social Post
        $facebookPost = $snapPost;
        $facebookPost['doFB'] = 1;
        if (!$request->input('blog')) {
            $postMeta = new PostMeta;
            $postMeta->post_id = $post->ID;
            $postMeta->meta_key = 'snapFB';
        } else {
            $postMeta = PostMeta::where('post_id', $post->ID)->where('meta_key', 'snapFB')->first();
        }
        $postMeta->meta_value = maybe_serialize([$facebookPost]);
        $postMeta->save();
        
        // Set Google Social Post
        $googlePost = $snapPost;
        $googlePost['doGP'] = 1;
        if (!$request->input('blog')) {
            $postMeta = new PostMeta;
            $postMeta->post_id = $post->ID;
            $postMeta->meta_key = 'snapGP';
        } else {
            $postMeta = PostMeta::where('post_id', $post->ID)->where('meta_key', 'snapGP')->first();
        }
        $postMeta->meta_value = maybe_serialize([$googlePost]);
        $postMeta->save();

        // Set Twitter Social Post
        $twitterPost = $snapPost;
        $twitterPost['msgFormat'] = $request->input('tweet', '%TITLE%') . "\rhttps://animadness.net/#/anime/".$request->input('id');
        $twitterPost['attchImg'] = 1;
        $twitterPost['doTW'] = 1;
        if (!$request->input('blog')) {
            $postMeta = new PostMeta;
            $postMeta->post_id = $post->ID;
            $postMeta->meta_key = 'snapTW';
        } else {
            $postMeta = PostMeta::where('post_id', $post->ID)->where('meta_key', 'snapTW')->first();
        }
        $postMeta->meta_value = maybe_serialize([$twitterPost]);
        $postMeta->save();

        // Return Response
        return [
            'success' => true,
            'data' => $post
        ]; 
    }

    public function setFeaturedImage($post_id, $image_url, $image_name = 'AnimeBanner.png') {
        $upload_dir       = wp_upload_dir(); // Set upload folder
        $image_data       = file_get_contents($image_url); // Get image data
        $unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name ); // Generate unique name
        $filename         = basename( $unique_file_name ); // Create image file name

        // Check folder permission and define file location
        if( wp_mkdir_p( $upload_dir['path'] ) ) {
            $file = $upload_dir['path'] . '/' . $filename;
        } else {
            $file = $upload_dir['basedir'] . '/' . $filename;
        }

        // Create the image  file on the server
        file_put_contents( $file, $image_data );

        // Check image file type
        $wp_filetype = wp_check_filetype( $filename, null );

        // Set attachment data
        $attachment = array(
            'post_author' => 1,
            'post_mime_type' => $wp_filetype['type'],
            'post_title'     => sanitize_file_name( explode('.', $filename)[0] ),
            'post_content'   => '',
            'post_status'    => 'inherit',
            'guid' => $upload_dir['url'] . '/' . $filename
        );

        // Create the attachment
        $attach_id = wp_insert_attachment( $attachment, $file, $post_id );

        // Define attachment metadata
        $attach_data = wp_generate_attachment_metadata( $attach_id, $file );

        // Assign metadata to attachment
        wp_update_attachment_metadata( $attach_id, $attach_data );

        // And finally assign featured image to post
        set_post_thumbnail( $post_id, $attach_id );
    }
}
