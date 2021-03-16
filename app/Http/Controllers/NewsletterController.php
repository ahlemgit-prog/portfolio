<?php

namespace App\Http\Controllers;

use app\Models\Newsletter;

class NewsletterController extends Controller
{
  public function show(Newsletter $newsletter) {
    return view('newsletters._index', compact('newsletter'));
  }

}
