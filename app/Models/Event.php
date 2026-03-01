<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'image',
        'title',
        'description',
        'event_date',
        'event_time',
        'location',
    ];

    protected $casts = [
        'event_date' => 'date',
        // 'event_time' => 'time',
    ];

    protected $table = 'events';

}
