<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\OneGameTimerModels;
use App\Models\TwoGameModels;
use App\Models\ThreeGameModels;
use App\Models\FourGameModels;
use App\Models\FiveGameModels;
use App\Models\SixGameModels;
use Illuminate\Http\Request;

class AddTimerController extends Controller
{
    public function onegame(Request $request) {

        $time = $request->input('timer');
        $time = preg_replace("/-/", "/", $time);
        $time = preg_replace("/T/", " ", $time);
        $time = $time . ":00";

        OneGameTimerModels::insert(array(
            'time' => $time
        ));
        return redirect()->back()->with('info', 'Таймер успешно добавлен');
    }
}
