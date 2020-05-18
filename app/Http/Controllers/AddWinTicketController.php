<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\OneGameWinModels;
use Illuminate\Http\Request;

class AddWinTicketController extends Controller
{
    public function onegamewin(Request $request) {

        $value1 = $request->input('TicketOneFieldOne');
        $value2 = $request->input('TicketOneFieldTwo');
        
        if (strlen($value1) > 3 && strlen($value2) > 3) {
                OneGameWinModels::insert(array(
                    'circulation' => 1,
                    'ticketOne' => $value1,
                    'ticketTwo' => $value2
                ));
                return redirect()->back()->with('info', 'Вы успешно отправили выиграшный билет!');
        }
        else {
            return redirect()->back()->with('info', 'Вы не выбрали номера билетов!');
        }
    }
}
