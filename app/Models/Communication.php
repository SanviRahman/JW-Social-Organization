<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Communication extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'message',
    ];

    protected $table = 'communications';
}
