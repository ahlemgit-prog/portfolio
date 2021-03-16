<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    public function blogs() {
      return $this->belongsToMany('App\Models\Blog', 'blogs_has_tags');
    }
    public function pages () {
      return $this->belongsToMany('App\Models\Page', 'pages_has_tags');
    }
}
