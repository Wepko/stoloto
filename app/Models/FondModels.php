<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FondModels extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'fond';

    protected $fillable = [
        'id',
        'fond'
    ];
}
