<?php

namespace App\Http\Controllers;

use app\Models\Tag;

class TagController extends Controller
{
  public function show (Tag $tag) {
    return view('tags._index', compact('tag'));
  }
}
