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
        $mas = [
            $request->input('lot1'),
            $request->input('lot2'),
            $request->input('lot3'),
            $request->input('lot4'),
            $request->input('lot5'),
            $request->input('lot6')
        ];

        
        $random = rand(1,10);
        if ($random > 8) {
            for ($i = 0; $i < 6; $i++) {
                
            }
            return redirect()->back()->with('res', 'Вы успешно выйграли билет!' . ' ' . $random);
        }
        else {
            for ($i = 0; $i < 6; $i++) {
                if ($mas[$i] == null) {
                    $mas[$i] = 'K';
                }
            }
            return redirect()->back()->with('res', 'Вы успешно проиграли билет!' . ' ' . $random . ' ' . implode($mas));
        }
    }
}

