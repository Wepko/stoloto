<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OneGameTimerModels extends Model
{
    protected $table = 'onegametimer';

    protected $fillable = [
        'id',
        'time'
    ];
}

