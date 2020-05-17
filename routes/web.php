<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/reg', function (){
  return view('reg');
})->name('reg');

Route::get('/login', function (){
  return view('login');
})->name('login');

Route::get('/lk', function (){
    return view('lk');
})->name('lk');

Route::post('/login-submit', 'LoginController@submit')->name('login-submit');
Route::post('/reg-submit', 'RegController@submit')->name('reg-submit');
Route::get('/logout', 'LKController@logout')->name('logout');
Route::post('/AddTicketValueOne', 'AddTicketController@onegame')->name('AddTicketValueOne');
Route::post('/AddTicketValueTwo', 'AddTicketController@twogame')->name('AddTicketValueTwo');
Route::post('/AddTicketValueThree', 'AddTicketController@threegame')->name('AddTicketValueThree');
Route::post('/AddTicketValueFour', 'AddTicketController@fourgame')->name('AddTicketValueFour');
Route::post('/AddTicketValueFive', 'AddTicketController@fivegame')->name('AddTicketValueFive');
Route::post('/AddTicketValueSix', 'AddTicketController@sixgame')->name('AddTicketValueSix');

Route::get('/admin', function (){
  return view('admin-panel');
})->name('admin');

Route::get('/ticket', function (){
  return view('ticket_sms');
})->name('ticket');

Route::get('/broadcast', function (){
  return view('broadcast');
})->name('broadcast');

Route::get('/valid', function (){
  return view('valid_ticket');
})->name('valid_ticket');

Route::get('/four-of-twenty', function (){
  return view('games.one-game');
})->name('one-game');

Route::get('/five-of-threety-six', function (){
  return view('games.two-game');
})->name('two-game');

Route::get('/seven-of-fourty-nine', function (){
  return view('games.three-game');
})->name('three-game');

Route::get('/six-of-fourty-five', function (){
  return view('games.four-game');
})->name('four-game');

Route::get('/twenteen-of-twenty-four', function (){
  return view('games.five-game');
})->name('five-game');

Route::get('/rapido', function (){
  return view('games.six-game');
})->name('six-game');

Route::get('/top-4', function (){
  return view('games.seven-game');
})->name('seven-game');

