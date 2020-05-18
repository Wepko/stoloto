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

    public function valid(Request $request) {
        if ($request->input('valid') == 1) {
            return ValidTicketController::validOneGame($request);
        }
        if ($request->input('valid') == 2) {
            return redirect()->back()->with('info', 'Two');
        }
        if ($request->input('valid') == 3) {
            return redirect()->back()->with('info', 'Three');
        }
        if ($request->input('valid') == 4) {
            return redirect()->back()->with('info', 'Four');
        }
        if ($request->input('valid') == 5) {
            return redirect()->back()->with('info', 'Five');
        }
        if ($request->input('valid') == 6) {
            return redirect()->back()->with('info', 'Six');
        }
    }

}
