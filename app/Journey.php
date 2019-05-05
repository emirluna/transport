<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Journey extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'DriverId', 'VehicleId', 'DepartureDate', 'ArrivalDate', 'SourcePlace', 'DestinationPlace', 'Status', 'Type', 'RealTime',
    ];

}
