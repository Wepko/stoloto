<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DistGameModels extends Model
{
    protected $table = 'distgame';

    protected $fillable = [
        'id',
        'numberGame',
        'distGame'
    ];
}
