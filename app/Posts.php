<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    public function tagsposts()
    {
      return $this->hasMany(TagsPosts::class, 'PostId','id');
    }

    public function likes()
    {
      return $this->hasMany(Likes::class, 'PostId','id');
    }

    public function comentarios()
    {
      return $this->hasMany(Comentarios::class, 'PostId','id');
    }

    public function users()
    {
      return $this->belongsTo(User::class, 'User_id','id');
    }
}
