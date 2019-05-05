<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Characteristic extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'VehicleId', 'Brand', 'Model', 'Color', 'N_Axis', 'Type', 'FuelCapacity', 'WeightCapacity', 'FuelType', 'FuelPerformance',
    ];

}
