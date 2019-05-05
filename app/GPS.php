<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GPS extends Model
{

    protected $table = 'gps';

    protected $fillable = [
        'IpAddress', 'Status',
    ];
}
