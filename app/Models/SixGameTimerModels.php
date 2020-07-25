<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SixGameTimerModels extends Model
{
    protected $table = 'sixgametimer';

    protected $fillable = [
        'id',
        'time'
    ];
}
