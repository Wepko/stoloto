<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefillModels extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'refill';

    protected $fillable = [
        'id',
        'user_id',
        'billId',
        'price',
        'status'
    ];
}
