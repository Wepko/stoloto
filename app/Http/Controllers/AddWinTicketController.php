<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\LKController;
use App\Models\OneGameWinModels;
use App\Models\TwoGameWinModels;
use App\Models\ThreeGameWinModels;
use App\Models\FourGameWinModels;
use App\Models\FiveGameWinModels;
use App\Models\SixGameWinModels;
use App\Models\UserWinnerModels;
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

    public function twogamewin(Request $request) {

        $value1 = $request->input('TicketTwoFieldOne');
        $value2 = $request->input('TicketTwoFieldTwo');
        
        if (strlen($value1) > 4 && strlen($value2) > 0) {
                TwoGameWinModels::insert(array(
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

    public function threegamewin(Request $request) {

        $value1 = $request->input('TicketThreeFieldOne');
        
        if (strlen($value1) > 6) {
                ThreeGameWinModels::insert(array(
                    'circulation' => 1,
                    'ticketOne' => $value1
                ));
                return redirect()->back()->with('info', 'Вы успешно отправили выиграшный билет!');
        }
        else {
            return redirect()->back()->with('info', 'Вы не выбрали номера билетов!');
        }
    }

    public function fourgamewin(Request $request) {

        $value1 = $request->input('TicketFourFieldOne');
        
        if (strlen($value1) > 5) {
                FourGameWinModels::insert(array(
                    'circulation' => 1,
                    'ticketOne' => $value1
                ));
                return redirect()->back()->with('info', 'Вы успешно отправили выиграшный билет!');
        }
        else {
            return redirect()->back()->with('info', 'Вы не выбрали номера билетов!');
        }
    }

    public function fivegamewin(Request $request) {

        $value1 = $request->input('TicketFiveFieldOne');
        
        if (strlen($value1) > 11) {
                FiveGameWinModels::insert(array(
                    'circulation' => 1,
                    'ticketOne' => $value1
                ));
                return redirect()->back()->with('info', 'Вы успешно отправили выиграшный билет!');
        }
        else {
            return redirect()->back()->with('info', 'Вы не выбрали номера билетов!');
        }
    }

    public function sixgamewin(Request $request) {

        $value1 = $request->input('TicketSixFieldOne');
        $value2 = $request->input('TicketSixFieldTwo');
        
        if (strlen($value1) > 7 && strlen($value2) > 0) {
                SixGameWinModels::insert(array(
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
