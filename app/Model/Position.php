<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $table = 'position';

    protected $casts = [
        'price' => 'float'
    ];

    protected $guarded = ['id']; //???
}
