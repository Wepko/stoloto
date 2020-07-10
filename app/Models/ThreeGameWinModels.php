<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ThreeGameWinModels extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = "threegamewin";

    protected $fillable = [
        'circulation',
        'ticketOne'
    ];

    public function circulation() {
        return $this->circulation;
    }
    public function ticketOne() {
        return $this->ticketOne;
    }
}
