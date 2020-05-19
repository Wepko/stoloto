<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\OneGameWinModels;
use Illuminate\Http\Request;
use DB;

class ValidTicketController extends Controller
{
    public function validOneGame(Request $request) {
        if ($request->input('circulation') && $request->input('fieldOne') && $request->input('fieldTwo')) {
            if (DB::table('onegamewin')->where('circulation', $request->input('circulation'))->first()
                && DB::table('onegamewin')->where('ticketOne', $request->input('fieldOne'))->first()
                && DB::table('onegamewin')->where('ticketTwo', $request->input('fieldTwo'))->first()
                ) {
                return redirect()->back()->with('info', 'Ваш билет выйграл!!!');
            }
            return redirect()->back()->with('info', 'Ваш билет не выйграл!!!');
        }
        return redirect()->back()->with('info', 'Что то не так...');
    }

    public function validTwoGame(Request $request) {
        if ($request->input('circulation') && $request->input('fieldOne') && $request->input('fieldTwo')) {
            if (DB::table('twogamewin')->where('circulation', $request->input('circulation'))->first()
                && DB::table('twogamewin')->where('ticketOne', $request->input('fieldOne'))->first()
                && DB::table('twogamewin')->where('ticketTwo', $request->input('fieldTwo'))->first()
                ) {
                return redirect()->back()->with('info', 'Ваш билет выйграл!!!');
            }
            return redirect()->back()->with('info', 'Ваш билет не выйграл!!!');
        }
        return redirect()->back()->with('info', 'Что то не так...');
    }

    public function validThreeGame(Request $request) {
        if ($request->input('circulation') && $request->input('fieldOne')) {
            if (DB::table('threegamewin')->where('circulation', $request->input('circulation'))->first()
                && DB::table('threegamewin')->where('ticketOne', $request->input('fieldOne'))->first()) {
                return redirect()->back()->with('info', 'Ваш билет выйграл!!!');
            }
            return redirect()->back()->with('info', 'Ваш билет не выйграл!!!');
        }
        return redirect()->back()->with('info', 'Что то не так...');
    }

    public function validFourGame(Request $request) {
        if ($request->input('circulation') && $request->input('fieldOne')) {
            if (DB::table('fourgamewin')->where('circulation', $request->input('circulation'))->first()
                && DB::table('fourgamewin')->where('ticketOne', $request->input('fieldOne'))->first()) {
                return redirect()->back()->with('info', 'Ваш билет выйграл!!!');
            }
            return redirect()->back()->with('info', 'Ваш билет не выйграл!!!');
        }
        return redirect()->back()->with('info', 'Что то не так...');
    }

    public function validFiveGame(Request $request) {
        if ($request->input('circulation') && $request->input('fieldOne')) {
            if (DB::table('fivegamewin')->where('circulation', $request->input('circulation'))->first()
                && DB::table('fivegamewin')->where('ticketOne', $request->input('fieldOne'))->first()) {
                return redirect()->back()->with('info', 'Ваш билет выйграл!!!');
            }
            return redirect()->back()->with('info', 'Ваш билет не выйграл!!!');
        }
        return redirect()->back()->with('info', 'Что то не так...');
    }

    public function validSixGame(Request $request) {
        if ($request->input('circulation') && $request->input('fieldOne') && $request->input('fieldTwo')) {
            if (DB::table('sixgamewin')->where('circulation', $request->input('circulation'))->first()
                && DB::table('sixgamewin')->where('ticketOne', $request->input('fieldOne'))->first()
                && DB::table('sixgamewin')->where('ticketTwo', $request->input('fieldTwo'))->first()
                ) {
                return redirect()->back()->with('info', 'Ваш билет выйграл!!!');
            }
            return redirect()->back()->with('info', 'Ваш билет не выйграл!!!');
        }
        return redirect()->back()->with('info', 'Что то не так...');
    }

    public function valid(Request $request) {
        if ($request->input('valid') == 1) {
            return ValidTicketController::validOneGame($request);
        }
        if ($request->input('valid') == 2) {
            return ValidTicketController::validTwoGame($request);
        }
        if ($request->input('valid') == 3) {
            return ValidTicketController::validThreeGame($request);
        }
        if ($request->input('valid') == 4) {
            return ValidTicketController::validFourGame($request);
        }
        if ($request->input('valid') == 5) {
            return ValidTicketController::validFiveGame($request);
        }
        if ($request->input('valid') == 6) {
            return ValidTicketController::validSixGame($request);
        }
    }

}
