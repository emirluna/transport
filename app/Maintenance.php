<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'VehicleId', 'Responsible', 'EstimatedTime', 'DateStartMaintenance', 'DateFinishMaintenance', 'Comments', 'Amount', 'Status', 'Cause',
    ];
}
