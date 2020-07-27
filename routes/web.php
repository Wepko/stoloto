<?php

use Illuminate\Support\Facades\Route;
use App\Models\OneGameModels;
use App\Models\TwoGameModels;
use App\Models\ThreeGameModels;
use App\Models\FourGameModels;
use App\Models\FiveGameModels;
use App\Models\SixGameModels;
use App\Models\OutputModels;
use App\Models\FondModels;
use App\Models\UserWinnerModels;
use App\Models\OneGameTimerModels;
use App\Models\TwoGameTimerModels;
use App\Models\ThreeGameTimerModels;
use App\Models\FourGameTimerModels;
use App\Models\FiveGameTimerModels;
use App\Models\SixGameTimerModels;
use App\Models\DistGameModels;

Route::get('/', function () {

  if ($fondModels = FondModels::where('id', '=', 1)->first()) {
    $fondModels = FondModels::where('id', '=', 1)->first();
    $fond = intval($fondModels->fond);
  }
  else  
    $fond = 0;
  
  $pre = "";
  $max1 = 6;
  $count = strlen($fond);
  $max1 = intval($max1) - intval($count);
  
  for ($i = 1; $i<=$max1; $i++)
    $pre = $pre . "0";

  $fond = $pre . $fond;

  return view('home', ['fond' => $fond]);
})->name('home');

Route::get('/reg', function (){
  return view('reg');
})->name('reg');

Route::get('/login', function (){
  return view('login');
})->name('login');

Route::get('/lk', 'LKController@index')->name('lk');

Route::post('/login-submit', 'LoginController@submit')->name('login-submit');
Route::post('/reg-submit', 'RegController@submit')->name('reg-submit');
Route::get('/logout', 'LKController@logout')->name('logout');


//добавление значения билетов пользователей 
Route::post('/AddTicketValueOne', 'AddTicketController@onegame')->name('AddTicketValueOne');
Route::post('/AddTicketValueTwo', 'AddTicketController@twogame')->name('AddTicketValueTwo');
Route::post('/AddTicketValueThree', 'AddTicketController@threegame')->name('AddTicketValueThree');
Route::post('/AddTicketValueFour', 'AddTicketController@fourgame')->name('AddTicketValueFour');
Route::post('/AddTicketValueFive', 'AddTicketController@fivegame')->name('AddTicketValueFive');
Route::post('/AddTicketValueSix', 'AddTicketController@sixgame')->name('AddTicketValueSix');

//добавление значения выиграшных билетов
Route::post('/AddWinTicketValueOne', 'AddWinTicketController@onegamewin')->name('AddWinTicketValueOne');
Route::post('/AddWinTicketValueTwo', 'AddWinTicketController@twogamewin')->name('AddWinTicketValueTwo');
Route::post('/AddWinTicketValueThree', 'AddWinTicketController@threegamewin')->name('AddWinTicketValueThree');
Route::post('/AddWinTicketValueFour', 'AddWinTicketController@fourgamewin')->name('AddWinTicketValueFour');
Route::post('/AddWinTicketValueFive', 'AddWinTicketController@fivegamewin')->name('AddWinTicketValueFive');
Route::post('/AddWinTicketValueSix', 'AddWinTicketController@sixgamewin')->name('AddWinTicketValueSix');

//Проверка билетов
Route::post('/ValidTicket', 'ValidTicketController@valid')->name('ValidTicketGame');
Route::post('/WinnerOne', 'AdminController@goWinnerOneGame')->name('WinnerOneGame');
Route::post('/WinnerTwo', 'AdminController@goWinnerTwoGame')->name('WinnerTwoGame');
Route::post('/WinnerThree', 'AdminController@goWinnerThreeGame')->name('WinnerThreeGame');
Route::post('/WinnerFour', 'AdminController@goWinnerFourGame')->name('WinnerFourGame');
Route::post('/WinnerFive', 'AdminController@goWinnerFiveGame')->name('WinnerFiveGame');
Route::post('/WinnerSix', 'AdminController@goWinnerSixGame')->name('WinnerSixGame');
Route::post('/distribution', 'AdminController@distribution')->name('distribution');

Route::post('/AddTimerOneGame', 'AddTimerController@onegame')->name('TimerOneGame');
Route::post('/AddTimerTwoGame', 'AddTimerController@twogame')->name('TimerTwoGame');
Route::post('/AddTimerThreeGame', 'AddTimerController@threegame')->name('TimerThreeGame');
Route::post('/AddTimerFourGame', 'AddTimerController@fourgame')->name('TimerFourGame');
Route::post('/AddTimerFiveGame', 'AddTimerController@fivegame')->name('TimerFiveGame');
Route::post('/AddTimerSixGame', 'AddTimerController@sixgame')->name('TimerSixGame');

Route::get('/refill', 'LKController@refill')->name('refill');
Route::post('/refill', 'LKController@output')->name('output');

Route::post('/ReplaceOneGame', 'AdminController@replaceOneGame')->name('ReplaceOneGame');
Route::post('/ReplaceTwoGame', 'AdminController@replaceTwoGame')->name('ReplaceTwoGame');
Route::post('/ReplaceThreeGame', 'AdminController@replaceThreeGame')->name('ReplaceThreeGame');
Route::post('/ReplaceFourGame', 'AdminController@replaceFourGame')->name('ReplaceFourGame');
Route::post('/ReplaceFiveGame', 'AdminController@replaceFiveGame')->name('ReplaceFiveGame');
Route::post('/ReplaceSixGame', 'AdminController@replaceSixGame')->name('ReplaceSixGame');
Route::post('/DistGame', 'AdminController@distGame')->name('distgame');

Route::get('/admin', function (){

  $count = [
    OneGameModels::count('id'),
    TwoGameModels::count('id'),
    ThreeGameModels::count('id'),
    FourGameModels::count('id'),
    FiveGameModels::count('id'),
    SixGameModels::count('id')
  ];
  
  $sum = [
    OneGameModels::sum('price'),
    TwoGameModels::sum('price'),
    ThreeGameModels::sum('price'),
    FourGameModels::sum('price'),
    FiveGameModels::sum('price'),
    SixGameModels::sum('price')
  ];
  
  return view('admin-panel', ['useroutputs' => OutputModels::all()], ['count' => $count, 'sum' => $sum]);

})->name('admin');

Route::get('/ticket', function (){
  return view('ticket_sms');
})->name('ticket');

Route::get('/broadcast', function (){
  return view('broadcast');
})->name('broadcast');

Route::get('/valid', function (){
  return view('valid_ticket', ['userwinner' => UserWinnerModels::all()]);
})->name('valid_ticket');

Route::prefix('/games')->group( function () {

  Route::get('four-of-twenty', function (){
    $fond = OneGameModels::sum('price');

    $pre = "";
    $max1 = 5;
    $count = strlen($fond);
    $max1 = intval($max1) - intval($count);
    
    for ($i = 1; $i<=$max1; $i++)
      $pre = $pre . "0";

    $fond = $pre . $fond;

    $circulation = OneGameModels::max('circulation');
    $time = OneGameTimerModels::where('id','=', 1)->value('time');
    return view('games.one-game', ['fond' => $fond, 'circulation' => $circulation, 'time' => $time]);
  })->name('one-game');

  Route::get('five-of-threety-six', function (){
    $fond = TwoGameModels::sum('price');

    $pre = "";
    $max1 = 5;
    $count = strlen($fond);
    $max1 = intval($max1) - intval($count);
    
    for ($i = 1; $i<=$max1; $i++)
      $pre = $pre . "0";

    $fond = $pre . $fond;

    $circulation = TwoGameModels::max('circulation');
    $time = TwoGameTimerModels::where('id','=', 1)->value('time');
    return view('games.two-game', ['fond' => $fond, 'circulation' => $circulation, 'time' => $time]);
  })->name('two-game');

  Route::get('seven-of-fourty-nine', function (){
    $fond = ThreeGameModels::sum('price');

    $pre = "";
    $max1 = 5;
    $count = strlen($fond);
    $max1 = intval($max1) - intval($count);
    
    for ($i = 1; $i<=$max1; $i++)
      $pre = $pre . "0";

    $fond = $pre . $fond;

    $circulation = ThreeGameModels::max('circulation');
    $time = ThreeGameTimerModels::where('id','=', 1)->value('time');
    return view('games.three-game', ['fond' => $fond, 'circulation' => $circulation, 'time' => $time]);
  })->name('three-game');

  Route::get('six-of-fourty-five', function (){
    $fond = FourGameModels::sum('price');

    $pre = "";
    $max1 = 5;
    $count = strlen($fond);
    $max1 = intval($max1) - intval($count);
    
    for ($i = 1; $i<=$max1; $i++)
      $pre = $pre . "0";

    $fond = $pre . $fond;

    $circulation = FourGameModels::max('circulation');
    $time = FourGameTimerModels::where('id','=', 1)->value('time');
    return view('games.four-game', ['fond' => $fond, 'circulation' => $circulation, 'time' => $time]);
  })->name('four-game');

  Route::get('twenteen-of-twenty-four', function (){
    $fond = FiveGameModels::sum('price');

    $pre = "";
    $max1 = 5;
    $count = strlen($fond);
    $max1 = intval($max1) - intval($count);
    
    for ($i = 1; $i<=$max1; $i++)
      $pre = $pre . "0";

    $fond = $pre . $fond;

    $circulation = FiveGameModels::max('circulation');
    $time = FiveGameTimerModels::where('id','=', 1)->value('time');
    return view('games.five-game', ['fond' => $fond, 'circulation' => $circulation, 'time' => $time]);
  })->name('five-game');

  Route::get('rapido', function (){
    $fond = SixGameModels::sum('price');

    $pre = "";
    $max1 = 5;
    $count = strlen($fond);
    $max1 = intval($max1) - intval($count);
    
    for ($i = 1; $i<=$max1; $i++)
      $pre = $pre . "0";

    $fond = $pre . $fond;

    $circulation = SixGameModels::max('circulation');
    $time = SixGameTimerModels::where('id','=', 1)->value('time');
    return view('games.six-game', ['fond' => $fond, 'circulation' => $circulation, 'time' => $time]);
  })->name('six-game');

  Route::get('/speed-game', function (){
    return view('games.speed-game');
  })->name('speed-game');

  Route::get('moment-game', function (){
    return view('games.speed-game');
  })->name('moment-game');

});

Route::prefix('/tutorials')->group( function () {
  Route::get('one-game', function (){
    return view('tutorials.one-game');
  })->name('tutorials-one-game');
  
  Route::get('two-game', function (){
    return view('tutorials.two-game');
  })->name('tutorials-two-game');
  
  Route::get('three-game', function (){
    return view('tutorials.three-game');
  })->name('tutorials-three-game');
  
  Route::get('four-game', function (){
    return view('tutorials.four-game');
  })->name('tutorials-four-game');
  
  Route::get('five-game', function (){
    return view('tutorials.five-game');
  })->name('tutorials-five-game');
  
  Route::get('six-game', function (){
    return view('tutorials.six-game');
  })->name('tutorials-six-game');

  Route::get('speed-game', function (){
    return view('tutorials.speed-game');
  })->name('tutorials-speed-game');
  
  Route::get('moment-game', function (){
    return view('tutorials.moment-game');
  })->name('tutorials-moment-game');
});



