<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NibondonForm extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'interests',
    ];

    protected $table = 'nibondon_forms';
}
