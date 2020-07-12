<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OutputModels extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'output';

    protected $fillable = [
        'id',
        'user_id',
        'cardNumber',
        'price',
        'status'
    ];
}
