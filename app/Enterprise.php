<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enterprise extends Model
{
    protected $table = 'enterprises';
    protected $fillable = [
        'Name', 'Status', 'Address_id'
    ];

    public function users(){
        return $this->hasMany('App\User');
    }
}
