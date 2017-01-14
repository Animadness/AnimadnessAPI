<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post as Post;

class PostController extends Controller
{
    public function viewAll($postsPerPage = 5) {
        return Post::type('post')->paginate($postsPerPage);
    }

    public function addNewPost(Request $request) {
        $post = new Post;
        return $post->add($request->all());
    }

    public function viewPublished($postsPerPage = 5) {
        return Post::type('post')->status('publish')->orderBy('ID', 'desc')->paginate($postsPerPage);
    }
}
