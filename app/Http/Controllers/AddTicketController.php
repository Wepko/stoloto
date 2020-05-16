<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\OneGameModels;
use Illuminate\Http\Request;

class AddTicketController extends Controller
{
    public function submit(Request $request) {

        $value1 = '';
        $value2 = '';

        for ($i = 1; $i <= $request->input(); $i++) {
            for ($j = 1; $j <= 20; $j++) {
                $value1 = $value1 . ' ' . strval($request->input('ticket' . $i . '_fieldOne' . $j));
                $value2 = $value2 . ' ' . strval($request->input('ticket' . $i . '_fieldTwo' . $j)); 
            }
        }

        $arr1 = [];
        $arr2 = [];

        $arr1 = str_split($value1);
        $arr2 = str_split($value2);

        $arr11 = array_diff($arr1, array(" "));
        $arr22 = array_diff($arr2, array(" "));
        
        if (count($arr11) > 3 && count($arr22) > 3) {
            if (Auth::check()) {
                OneGameModels::insert(array(
                    'user_id'  => Auth::user()->getId(),
                    'circulation' => 1,
                    'ticketOne' => implode($arr11),
                    'ticketTwo' => implode($arr22)
                ));
                return redirect()->back()->with('info', 'Вы успешно отправили билет, ждите розыгрыша!');
            }
            return redirect()->back()->with('info', 'Войдите в аккаунт!');
        }
        else {
            return redirect()->back()->with('info', 'Вы не выбрали номера билетов!');
        }
    }
}
