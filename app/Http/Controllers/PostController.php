<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(Post $post) {
    return view('posts.projets', compact('post'));
  }
}
