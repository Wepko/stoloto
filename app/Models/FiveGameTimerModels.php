<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FiveGameTimerModels extends Model
{
    protected $table = 'fivegametimer';

    protected $fillable = [
        'id',
        'time'
    ];
}
