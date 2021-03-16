<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    public function blogs() {
      return $this->belongsToMany('App\Models\Blog', 'blogs_has_categories');
    }
    public function pages () {
      return $this->belongsToMany('App\Models\Page', 'pages_has_categories');
    }

}
