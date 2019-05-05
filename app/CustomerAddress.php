<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerAddress extends Model
{
    protected $table = 'customeraddress';

    protected $fillable = [
        'CustomerId', 'Street', 'Number', 'Town', 'City', 'Country', 'ZipCode', 'Status'
    ];

}
