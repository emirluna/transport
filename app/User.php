<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Name', 'LastName', 'email', 'password', 'username', 'Phone', 'Status', 'Enterprise_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function enterprise(){
        return $this->belongsTo('App\Enterprise', 'Enterprise_id');
    }

    public function roles(){
        return $this->belongsToMany('App\Role', 'role_user', 'user_id', 'role_id')
                    ->withTimestamps();
    }


    public function address(){
        return $this->hasMany('App\Address');
    }

}
