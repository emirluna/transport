<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Status', 'GPSId', 'EnterpriseId',
    ];
}

