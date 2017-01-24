<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post as Post;
use App\PostMeta as PostMeta;
use App\TermRelation as TermRelation;

class PostController extends Controller
{
    public function viewAll($postsPerPage = 5) {
        return Post::type('post')->paginate($postsPerPage);
    }

    public function addNewPost(Request $request) {
        $post = new Post;
        $post->post_author = $request->input('author', 1);
        $post->post_type = $request->input('type', 'post');
        $post->post_status = $request->input('status', 'draft');
        $post->post_title = $request->input('title', 'New Blog Post');
        $post->post_name = $request->input('name', 'new-blog-post');
        $post->post_content = $request->input('content', '');
        $post->save();
        
        return $post;
    }

    public function viewPublished($postsPerPage = 5) {
        return Post::type('post')->status('publish')->orderBy('ID', 'desc')->paginate($postsPerPage);
    }

    public function termRelationships() {
        return TermRelation::all();
    }

    public function viewMeta($id, $key) {
        $data = maybe_unserialize(get_post_meta($id, $key, true));
        return $data;
    }
}
