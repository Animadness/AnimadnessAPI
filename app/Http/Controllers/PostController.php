<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post as Post;

class PostController extends Controller
{
    public function viewAll() {
        return Post::type('post')->get();
    }

    public function addNewPost(Request $request) {
        $post = new Post;
        return $post->add($request->all());
    }
}
