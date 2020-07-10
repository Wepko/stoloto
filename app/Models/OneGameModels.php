<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OneGameModels extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'onegame';

    protected $fillable = [
        'id',
        'user_id',
        'circulation',
        'ticketOne',
        'ticketTwo',
        'price'
    ];

}

