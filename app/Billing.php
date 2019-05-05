<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{

    use Notifiable;


    protected $fillable = [
        'JourneyId', 'MaintenanceId', 'Item', 'Bill', 'Responsible', 'Status', 'Details',
    ];

}
