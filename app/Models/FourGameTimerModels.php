<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FourGameTimerModels extends Model
{
    protected $table = 'fourgametimer';

    protected $fillable = [
        'id',
        'time'
    ];
}
