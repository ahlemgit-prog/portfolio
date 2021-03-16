<?php

namespace App\Http\Controllers;

use app\Models\Commentaire;

class CommentaireController extends Controller
{
  public function show(Commentaire $commentaire) {
    return view('commentaires._index', compact('commentaire'));
  }
}
