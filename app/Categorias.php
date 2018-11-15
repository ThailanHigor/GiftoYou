<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    public function usuarios()
    {
        return $this->belongsToMany('App\User');
    }
}
