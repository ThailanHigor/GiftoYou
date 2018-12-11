<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Likes extends Model
{
    public function posts()
    {
      return $this->belongsTo(Posts::class, 'Postid','id');
    }
}
