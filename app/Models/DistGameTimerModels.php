<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DistGameTimerModels extends Model
{
    protected $table = 'onegametimer';

    protected $fillable = [
        'id',
        'time'
    ];
}
