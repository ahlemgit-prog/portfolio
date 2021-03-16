<?php

namespace App\Http\Controllers;

use app\Models\Categorie;

class CategorieController extends Controller
{
  public function show(Categorie $categorie) {
    return view('categories._index', compact('categorie'));
  }
}
