<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersLojas extends Model
{
    public $timestamps = false;

    public function lojas()
    {
      return $this->belongsTo(Lojas::class, 'Lojas_id','Id');
    }
}
