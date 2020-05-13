<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function submit(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if(!Auth::attempt($request->only(['email','password']), $request->has('remember'))) {
            return redirect()->back()->with('info','Неправильный логин или пароль!');
        }
        return redirect()->route('lk')->with('info', 'Вы вошли в личный кабинет!');
    }
}
