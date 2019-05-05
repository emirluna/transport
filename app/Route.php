<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'EstimatedFuel', 'Distance', 'EstimatedTime', 'TollBooths', 'foods', 'JourneyId',
    ];

}
