<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TwoGameWinModels extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = "twogamewin";

    protected $fillable = [
        'circulation',
        'ticketOne',
        'ticketTwo'
    ];

    public function circulation() {
        return $this->circulation;
    }
    public function ticketOne() {
        return $this->ticketOne;
    }
    public function ticketTwo() {
        return $this->ticketTwo;
    }
}
