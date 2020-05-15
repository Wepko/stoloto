<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddTicketController extends Controller
{
    public function submit(Request $request) {

        $value1 = '';
        $value2 = '';

        for ($i = 1; $i <= 1; $i++) {
            for ($j = 1; $j <=20; $j++) {
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
            return redirect()->back()->with('info', 'Вы выбрали номер билета ' . implode($arr1) . ' --- ' . implode($arr2));
        }
        else {
            return redirect()->back()->with('info', 'Вы не выбрали номера билетов!');
        }
    }
}
