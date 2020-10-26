<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefUserModels extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'ref_user';

    protected $fillable = [
        'id',
        'user_id',
        'user_ref_id', 
        'status'
    ];
}
