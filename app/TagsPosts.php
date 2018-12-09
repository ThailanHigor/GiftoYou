<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagsPosts extends Model
{
    public function posts()
    {
      return $this->belongsTo(Posts::class, 'PostId','id');
    }
}
