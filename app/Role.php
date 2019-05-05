<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'Rol',
    ];


    public function users()
    {
        $this->belongsToMany('App\User')
            ->withTimestamps();
    }
}

