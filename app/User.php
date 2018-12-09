<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;


    public function categorias()
    {
       return $this->belongsToMany('App\Categorias');
    }
    

    public function lojas()
    {
       return $this->belongsToMany('App\Lojas');
    }

    public function posts()
    {
      return $this->belongsTo(Posts::class, 'PostId','id');
    }

    public function user_friends()
    {
      return $this->belongsTo(UserFriends::class, 'UserFriend_id','id');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
