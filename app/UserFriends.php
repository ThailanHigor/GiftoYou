<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFriends extends Model
{
    public function users()
    {
      return $this->hasMany(User::class, 'id', 'UserFriend_id');
    }
}
