<?php

namespace App\Http\Controllers;

use app\Models\Contact;

class ContactController extends Controller
{
  public function show(Contact $contact) {
    return view('contacts._index', compact('contact'));
  }
}
