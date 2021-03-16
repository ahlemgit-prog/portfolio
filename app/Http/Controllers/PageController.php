<?php

namespace App\Http\Controllers;

use app\Models\Page;

class PageController extends Controller
{
  public function show(Page $page) {
    return view('pages._index', compact('page'));
  }
}
