<?php

namespace App\Http\Controllers;

use app\Models\Blog;

class BlogController extends Controller
{
  public function show(Blog $blog) {
    return view('blogs._index', compact('blog'));
  }
}
