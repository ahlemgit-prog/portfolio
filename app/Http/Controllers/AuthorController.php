<?php

namespace App\Http\Controllers;

use app\Models\Author;

class AuthorController extends Controller
{
  public function show(Author $author) {
    return view('authors.projets', compact('author'));
  }
}
