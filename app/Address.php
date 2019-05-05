<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'address';
    protected $fillable = [
        'Street', 'Number', 'Town', 'City', 'State', 'Country', 'ZipCode', 'Status', 'Users_id',
    ];


    public function users(){
        return $this->belongsTo('App\User', 'Users_id');
    }

}
