<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\RefUserModels;
use Illuminate\Http\Request;

class RegController extends Controller
{
    public function submit(Request $request) {
        $this->validate($request, [
            'first_name' => 'required|min:2|max:20',
            'last_name' => 'required|min:2|max:30',
            'phone' => 'required',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:6',
            'confpass' => 'required|min:6',
            'validAge' => 'required'
        ]);

        User::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);

        return redirect()->route('home')->with('info','Вы зарегистрировались!');
    }

    public function submitRef(Request $request) {
        $this->validate($request, [
            'first_name' => 'required|min:2|max:20',
            'last_name' => 'required|min:2|max:30',
            'phone' => 'required',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:6',
            'confpass' => 'required|min:6',
            'validAge' => 'required'
        ]);

        User::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'referal_id' => $request->input('ref_link')
        ]);

        return redirect()->route('home')->with('info','Вы зарегистрировались!');
    }
}
