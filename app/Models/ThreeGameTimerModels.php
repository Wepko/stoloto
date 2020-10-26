<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ThreeGameTimerModels extends Model
{
    protected $table = 'threegametimer';

    protected $fillable = [
        'id',
        'time'
    ];
}
