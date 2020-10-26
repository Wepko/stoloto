<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefCoffModels extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'ref_coff';

    protected $fillable = [
        'id',
        'coff'
    ];
}
