<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TwoGameTimerModels extends Model
{
    protected $table = 'twogametimer';

    protected $fillable = [
        'id',
        'time'
    ];
}
