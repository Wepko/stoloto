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

        $word = '';
        $error = ['Г','Д','Б','В'];
        $res = ['П','Р','И','З'];
        $value = ['П','Р','И','З','А','К'];
        $h = 5;

        $random = rand(1,10);
        if ($random > 8) {
            for ($i = 0; $i < 6; $i++) {
                
            }
            return redirect()->back()->with(
                ['res' => 'Вы успешно выйграли билет!' . ' ' . $random],
                ['lot1' => 1],
                ['lot2' => 2],
                ['lot3' => 3],
                ['lot4' => 4],
                ['lot5' => 5],
                ['lot6' => 6]
            );
        }
        else {
            for ($i = 0; $i < 6; $i++) {
                if ($mas[$i] == null) {
                    $mas[$i] = $res[rand(0,3)];
                }
                if ($mas[$i] == $value[$h]) {
                    $mas[$i] = $value[$h++];
                }
                else {
                    $mas[$i] = $value[$h];
                }
                $h--;
            }
            return redirect()->back()->with(
                ['res' =>'Вы успешно проиграли билет!'],
                ['lot1' => $mas[0]],
                ['lot2' => $mas[1]],
                ['lot3' => $mas[2]],
                ['lot4' => $mas[3]],
                ['lot5' => $mas[4]],
                ['lot6' => $mas[5]]
            );
        }
    }
}

