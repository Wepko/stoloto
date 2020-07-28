<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class EasyGameController extends Controller
{
    public function refillSpeedGame() {
        if (Auth::check()) {
            if (Auth::user()->money() > 20) {

                $model = User::where('id', '=', Auth::user()->getId())->first();
                $money = strval(intval(Auth::user()->money()) - 20);
                $model->money = $money;
                $model->save();

                return redirect()->back()->with('res','Игра началась! Пожалуйста не перезагружайте страницу.');
            } else
                return redirect()->back()->with('info','У вас недостаточно средств!');
        } else
            return redirect()->back()->with('info', 'Войдите в аккаунт!');
    }
}
