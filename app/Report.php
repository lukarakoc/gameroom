<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'deviceName',
        'time',
        'price',
        'start_time',
        'end_time'
    ];
}
