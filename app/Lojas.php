<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lojas extends Model
{
    public function usuarios()
    {
        return $this->belongsToMany('App\User');
    }

    public function usersLojas()
    {
      return $this->hasMany(Lojas::class, 'Id','Lojas_id');
    }

}
