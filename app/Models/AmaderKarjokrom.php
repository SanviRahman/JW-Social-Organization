<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AmaderKarjokrom extends Model
{
    protected $fillable = [
        'image',
        'title',
        'description',
    ];

    protected $table = 'amader_karjokroms';
}
