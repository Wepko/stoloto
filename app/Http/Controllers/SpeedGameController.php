<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpeedGameController extends Controller
{
    public function OneSpeedGame(Request $request)
    {
        return redirect()->back()->with('good', 'Вы успешно купили билет!');
    }
    public function OneSpeedGameRes(Request $request)
    {
        $random = rand(1,10);
        if ($random > 8) {
            return redirect()->back()->with('info', 'Вы успешно выйграли билет!' . ' ' . $random);
        }
        else {
            return redirect()->back()->with('info', 'Вы успешно проиграли билет!' . ' ' . $random);
        }
    }
}
