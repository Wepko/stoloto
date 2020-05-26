<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\UserWinnerModels;
use Illuminate\Http\Request;
use DB;

class LKController extends Controller
{

    public function index() {
        return view('lk', ['userwinner' => UserWinnerModels::all()]);
    }

    public function logout(){
        Auth::logout();

        return redirect()->route('home');
    }
}
