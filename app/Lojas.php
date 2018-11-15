<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lojas extends Model
{
    public function usuarios()
    {
        return $this->belongsToMany('App\User');
    }
}
