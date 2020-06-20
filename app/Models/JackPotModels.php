<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JackPotModels extends Model
{
    protected $table = 'jackpot';

    protected $fillable = [
        'id',
        'NameJackpot',
        'price'
    ];
}
