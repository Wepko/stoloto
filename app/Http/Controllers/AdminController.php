<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\UserWinnerModels;
use App\Models\OneGameWinModels;
use App\Models\OneGameModels;
use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function goWinnerOneGame() {
        $tickets = OneGameModels::all();
        return redirect()->back()->with('info', $tickets['user_id']);
    }
}
