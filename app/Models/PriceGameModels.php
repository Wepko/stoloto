<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PriceGameModels extends Model
{
    protected $table = 'pricegame';

    protected $fillable = [
        'id',
        'price'
    ];
}
