<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\OneGameTimerModels;
use App\Models\TwoGameTimerModels;
use App\Models\ThreeGameTimerModels;
use App\Models\FourGameTimerModels;
use App\Models\FiveGameTimerModels;
use App\Models\SixGameTimerModels;
use App\Models\TwoGameModels;
use App\Models\ThreeGameModels;
use App\Models\FourGameModels;
use App\Models\FiveGameModels;
use App\Models\SixGameModels;
use App\Models\DistGameTimerModels;
use Illuminate\Http\Request;

class AddTimerController extends Controller
{
    public function onegame(Request $request) {

        $time = $request->input('timer');
        $time = preg_replace("/T/", " ", $time);
        $time = $time . ":00";

        if (OneGameTimerModels::count() == 0) {
            OneGameTimerModels::insert(array(
                'time' => $time
            ));
        }
        else {
            $models = OneGameTimerModels::where('id', '=', 1)->first();
            $models->time = $time;
            $models->save();
        }

        return redirect()->back()->with('info', 'Таймер успешно добавлен');
    }

    public function twogame(Request $request) {

        $time = $request->input('timer');
        $time = preg_replace("/T/", " ", $time);
        $time = $time . ":00";

        if (TwoGameTimerModels::count() == 0) {
            TwoGameTimerModels::insert(array(
                'time' => $time
            ));
        }
        else {
            $models = TwoGameTimerModels::where('id', '=', 1)->first();
            $models->time = $time;
            $models->save();
        }

        return redirect()->back()->with('info', 'Таймер успешно добавлен');
    }

    public function threegame(Request $request) {

        $time = $request->input('timer');
        $time = preg_replace("/T/", " ", $time);
        $time = $time . ":00";

        if (ThreeGameTimerModels::count() == 0) {
            ThreeGameTimerModels::insert(array(
                'time' => $time
            ));
        }
        else {
            $models = ThreeGameTimerModels::where('id', '=', 1)->first();
            $models->time = $time;
            $models->save();
        }

        return redirect()->back()->with('info', 'Таймер успешно добавлен');
    }

    public function fourgame(Request $request) {

        $time = $request->input('timer');
        $time = preg_replace("/T/", " ", $time);
        $time = $time . ":00";

        if (FourGameTimerModels::count() == 0) {
            FourGameTimerModels::insert(array(
                'time' => $time
            ));
        }
        else {
            $models = FourGameTimerModels::where('id', '=', 1)->first();
            $models->time = $time;
            $models->save();
        }

        return redirect()->back()->with('info', 'Таймер успешно добавлен');
    }

    public function fivegame(Request $request) {

        $time = $request->input('timer');
        $time = preg_replace("/T/", " ", $time);
        $time = $time . ":00";

        if (FiveGameTimerModels::count() == 0) {
            FiveGameTimerModels::insert(array(
                'time' => $time
            ));
        }
        else {
            $models = FiveGameTimerModels::where('id', '=', 1)->first();
            $models->time = $time;
            $models->save();
        }

        return redirect()->back()->with('info', 'Таймер успешно добавлен');
    }

    public function sixgame(Request $request) {

        $time = $request->input('timer');
        $time = preg_replace("/T/", " ", $time);
        $time = $time . ":00";

        if (SixGameTimerModels::count() == 0) {
            SixGameTimerModels::insert(array(
                'time' => $time
            ));
        }
        else {
            $models = SixGameTimerModels::where('id', '=', 1)->first();
            $models->time = $time;
            $models->save();
        }

        return redirect()->back()->with('info', 'Таймер успешно добавлен');
    }

    public function distgame(Request $request) {

        $time = $request->input('timer');
        $time = preg_replace("/T/", " ", $time);
        $time = $time . ":00";

        if (DistGameTimerModels::count() == 0) {
            DistGameTimerModels::insert(array(
                'time' => $time
            ));
        }
        else {
            $models = DistGameTimerModels::where('id', '=', 1)->first();
            $models->time = $time;
            $models->save();
        }

        return redirect()->back()->with('info', 'Таймер успешно добавлен');
    }
}

