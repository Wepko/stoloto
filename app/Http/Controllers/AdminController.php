<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\UserWinnerModels;
use App\Models\OneGameWinModels;
use App\Models\OneGameModels;
use App\Models\TwoGameWinModels;
use App\Models\TwoGameModels;
use App\Models\ThreeGameWinModels;
use App\Models\ThreeGameModels;
use App\Models\FourGameWinModels;
use App\Models\FourGameModels;
use App\Models\FiveGameWinModels;
use App\Models\FiveGameModels;
use App\Models\SixGameWinModels;
use App\Models\SixGameModels;
use App\Models\FondModels;
use App\Models\PriceGameModels;
use App\Models\DistGameModels;
use App\Models\JackPotModels;
use Illuminate\Http\Request;
use DB; 

class AdminController extends Controller
{

    public function distGame(Request $request) {
        $numberGame = $request->input('game');
        $model = DistGameModels::where('numberGame', '=', $numberGame)->first();
        $model->distGame = true;
        $model->save();
        return redirect()->back()->with('info', 'Начат розыгрыш распределения');
    }

    public function distribution() {

        $fond = JackPotModels::sum('price');

        $constFond = $fond;
        $countUsers = JackPotModels::count('id');
        
        $fond = strval(intval($fond / $countUsers));
        $users = User::all();

        $ticketWinOne = $request->input('winticket');
        $ticketWinOneArr = str_split($ticketWinOne, 2);

        foreach ($users as $user) {
            $model = JackPotModels::where('user_id', '=', $user->id)->first();
            $ticketOne = $model->ticketOne;
            $ticketOneArr = str_split($ticketOne, 2);
            $countOneArr = array_intersect($ticketWinOneArr, $ticketOneArr);
            $countOne = count($countOneArr);

            if ($countOne > 2) {
                $money = strval(intval($user->money()) + intval($fond));
                $model->money = $money;
                $model->save();
            }
        }

        $model = FondModels::where('id', '=', 1)->first();
        $model->fond = strval(intval($model->fond) - intval($constFond));
        $model->save();



        return redirect()->back()->with('info', 'Розыгрыш успешно прошел!');
    }


    public function goWinnerOneGame() {

        $countOne = 0;
        $countTwo = 0;
        $win = 0;

        $fond = OneGameModels::sum('price');
        $winMoney = 0;

        $tickets = DB::table('onegame')->where('circulation', OneGameWinModels::max('circulation'))->get();
        $ticketWin = DB::table('onegamewin')->where('circulation', OneGameWinModels::max('circulation'))->first();

        $ticketWinOne = $ticketWin->ticketOne;
        $ticketWinTwo = $ticketWin->ticketTwo;

        foreach ($tickets as $ticket) {

            //ticket user
            $ticketOne = $ticket->ticketOne;
            $ticketTwo = $ticket->ticketTwo;

            $ticketWinOneArr = str_split($ticketWinOne, 2);
            $ticketWinTwoArr = str_split($ticketWinTwo, 2);
            $ticketOneArr = str_split($ticketOne, 2);
            $ticketTwoArr = str_split($ticketTwo, 2);

            $countOneArr = array_intersect($ticketWinOneArr, $ticketOneArr);
            $countTwoArr = array_intersect($ticketWinTwoArr, $ticketTwoArr);

            $countOne = count($countOneArr);
            $countTwo = count($countTwoArr);

            if ($countOne != 0 && $countTwo != 0) {
                if ($countOne == 0 && $countTwo != 0) {
                    if ($countTwo == 2) {
                        $win = 'Вы выйграли 12 категорию';
                        $winMoney = $fond * 0.01;
                    }
                    if ($countTwo == 3) {
                        $win = 'Вы выйграли 9 категорию';
                        $winMoney = $fond * 0.03;
                    }
                    if ($countTwo == 4) {
                        $win = 'Вы выйграли 5 категорию';
                        $winMoney = $fond * 0.07;
                    }
                }
                if ($countOne != 0 && $countTwo == 0) {
                    if ($countOne == 2) {
                        $win = 'Вы выйграли 12 категорию';
                        $winMoney = $fond * 0.01;
                    }
                    if ($countOne == 3) {
                        $win = 'Вы выйграли 9 категорию';
                        $winMoney = $fond * 0.03;
                    }
                    if ($countOne == 4) {
                        $win = 'Вы выйграли 5 категорию';
                        $winMoney = $fond * 0.07;
                    }
                }
                if ($countOne == 4 && $countTwo == 4) {
                    $win = 'Вы выйграли 1 категорию';
                    $winMoney = $fond * 0.08;
                }
                if ($countOne == 4 && $countTwo == 3) {
                    $win = 'Вы выйграли 2 категорию';
                    $winMoney = $fond * 0.1;
                }
                if ($countOne == 3 && $countTwo == 4) {
                    $win = 'Вы выйграли 2 категорию';
                    $winMoney = $fond * 0.1;
                }
                if ($countOne == 4 && $countTwo == 2) {
                    $win = 'Вы выйграли 3 категорию';
                    $winMoney = $fond * 0.09;
                }
                if ($countOne == 2 && $countTwo == 4) {
                    $win = 'Вы выйграли 3 категорию';
                    $winMoney = $fond * 0.09;
                }
                if ($countOne == 4 && $countTwo == 1) {
                    $win = 'Вы выйграли 4 категорию';
                    $winMoney = $fond * 0.08;
                }
                if ($countOne == 1 && $countTwo == 4) {
                    $win = 'Вы выйграли 4 категорию';
                    $winMoney = $fond * 0.08;
                }
                if ($countOne == 3 && $countTwo == 3) {
                    $win = 'Вы выйграли 5 категорию';
                    $winMoney = $fond * 0.05;
                }
                if ($countOne == 3 && $countTwo == 2) {
                    $win = 'Вы выйграли 7 категорию';
                    $winMoney = $fond * 0.04;
                }
                if ($countOne == 2 && $countTwo == 3) {
                    $win = 'Вы выйграли 7 категорию';
                    $winMoney = $fond * 0.04;
                }
                if ($countOne == 3 && $countTwo == 1) {
                    $win = 'Вы выйграли 8 категорию';
                    $winMoney = $fond * 0.03;
                }
                if ($countOne == 1 && $countTwo == 3) {
                    $win = 'Вы выйграли 8 категорию';
                    $winMoney = $fond * 0.03;
                }
                if ($countOne == 2 && $countTwo == 2) {
                    $win = 'Вы выйграли 10 категорию';
                    $winMoney = 0;
                }
                if ($countOne == 2 && $countTwo == 1) {
                    $win = 'Вы выйграли 11 категорию';
                    $winMoney = $fond * 0.02;
                }
                if ($countOne == 1 && $countTwo == 2) {
                    $win = 'Вы выйграли 11 категорию';
                    $winMoney = $fond * 0.02;
                }
            } 
            else 
                $win =  "Ваш билет не выйграл!!!";

            $model = User::where('id', '=', $ticket->user_id)->first();
            
            $money = strval(intval($model->money) + intval($winMoney));
            $model->money = $money;
            $model->save();

            UserWinnerModels::insert(array(
                'user_id' => $ticket->user_id,
                'numberGame' => 1,
                'circulation' => $ticket->circulation,
                'win' => $win
            ));

        }
        
        $models = DistGameModels::where('id','=',1)->first();
        $models->stopGame = true;
        $model->save();

        return redirect()->back()->with('info', 'Розыгрыш успешно прошел!');
    }

    public function goWinnerTwoGame() {

        $countOne = 0;
        $countTwo = 0;
        $fond = TwoGameModels::sum('price');
        $winMoney = 0;
        $win = 0;

        $tickets = DB::table('twogame')->where('circulation', TwoGameWinModels::max('circulation'))->get();
        $ticketWin = DB::table('twogamewin')->where('circulation', TwoGameWinModels::max('circulation'))->first();

        $ticketWinOne = $ticketWin->ticketOne;
        $ticketWinTwo = $ticketWin->ticketTwo;

        foreach ($tickets as $ticket) {

            //ticket user
            $ticketOne = $ticket->ticketOne;
            $ticketTwo = $ticket->ticketTwo;

            $ticketWinOneArr = str_split($ticketWinOne, 2);
            $ticketWinTwoArr = str_split($ticketWinTwo, 2);
            $ticketOneArr = str_split($ticketOne, 2);
            $ticketTwoArr = str_split($ticketTwo, 2);

            $countOneArr = array_intersect($ticketWinOneArr, $ticketOneArr);
            $countTwoArr = array_intersect($ticketWinTwoArr, $ticketTwoArr);

            $countOne = count($countOneArr);
            $countTwo = count($countTwoArr);

            if ($countOne > 1) {
                if ($countOne == 5 && $countTwo == 1) {
                    $win = 'Вы выйграли суперприз!';
                    $winMoney = $fond * 0.3;
                }
                if ($countOne != 5 && $countTwo != 1) {
                    if ($countOne == 2) {
                        $win = 'Вы выйграли 20 рублей!';
                        $winMoney = 20;
                    }
                    if ($countOne == 3) {
                        $win = 'Вы выйграли 100 рублей!';
                        $winMoney = 100;
                    }
                    if ($countOne == 4) {
                        $win = 'Вы выйграли 300 рублей!';
                        $winMoney = 300;
                    }
                    if ($countOne == 5) {
                        $win = 'Вы выйграли приз!';
                        $winMoney = $fond * 0.1;
                    }
                } 
            } 
            else {
                $win = 'Ваш билет не выйграл!!!';
            }

            $model = User::where('id', '=', $ticket->user_id)->first();
            
            $money = strval(intval($model->money) + intval($winMoney));
            $model->money = $money;
            $model->save();

            UserWinnerModels::insert(array(
                'user_id' => $ticket->user_id,
                'numberGame' => 2,
                'circulation' => $ticket->circulation,
                'win' => $win
            ));
        }
        $models = DistGameModels::where('id','=',2)->first();
        $models->stopGame = true;
        $model->save();
        return redirect()->back()->with('info', 'Розыгрыш успешно прошел!');

    }

    public function goWinnerThreeGame() {
        
        $countOne = 0;
        $win = 0;

        $fond = ThreeGameModels::sum('price');
        $winMoney = 0;

        $tickets = DB::table('threegame')->where('circulation', ThreeGameWinModels::max('circulation'))->get();
        $ticketWin = DB::table('threegamewin')->where('circulation', ThreeGameWinModels::max('circulation'))->first();
        
        $ticketWinOne = $ticketWin->ticketOne;
        $ticketWinOneArr = str_split($ticketWinOne, 2);

        foreach ($tickets as $ticket) {

            $ticketOne = $ticket->ticketOne;
            $ticketOneArr = str_split($ticketOne, 2);
     
            $countOneArr = array_intersect($ticketWinOneArr, $ticketOneArr);
            $countOne = count($countOneArr);

            if ($countOne > 1) {
                if ($countOne == 2) {
                    $win =  'Вы выйграли 15 рублей!';
                    $winMoney = 15;
                }
                if ($countOne == 3) {
                    $win = 'Вы выйграли 50 рублей!';
                    $winMoney = 50;
                }
                if ($countOne == 4) {
                    $win = 'Вы выйграли 150 рублей!';
                    $winMoney = 150;
                }
                if ($countOne == 5) {
                    $win = 'Вы выйграли 1000 рублей!';
                    $winMoney = 1000;
                }
                if ($countOne == 6) {
                    $win = 'Вы выйграли 2500 рублей!';
                    $winMoney = 2500;
                }
                if ($countOne == 7) {
                    $win = 'Вы выйграли суперприз!';
                    $winMoney = $fond * 0.3;
                }
            } else {
                $win = 'Ваш билет не выйграл!!!';
            }

            $model = User::where('id', '=', $ticket->user_id)->first();
            
            $money = strval(intval($model->money) + intval($winMoney));
            $model->money = $money;
            $model->save();

            UserWinnerModels::insert(array(
                'user_id' => $ticket->user_id,
                'numberGame' => 3,
                'circulation' => $ticket->circulation,
                'win' => $win
            ));

        }
        $models = DistGameModels::where('id','=',3)->first();
        $models->stopGame = true;
        $model->save();
        return redirect()->back()->with('info', 'Розыгрыш успешно прошел!');
    }

    public function goWinnerFourGame() {

        $countOne = 0;
        $win = 0;

        $fond = FourGameModels::sum('price');
        $winMoney = 0;

        $tickets = DB::table('fourgame')->where('circulation', FourGameWinModels::max('circulation'))->get();
        $ticketWin = DB::table('fourgamewin')->where('circulation', FourGameWinModels::max('circulation'))->first();
        
        $ticketWinOne = $ticketWin->ticketOne;
        $ticketWinOneArr = str_split($ticketWinOne, 2);

        foreach ($tickets as $ticket) {

            $ticketOne = $ticket->ticketOne;
                
            $ticketWinOneArr = str_split($ticketWinOne, 2);
            $ticketOneArr = str_split($ticketOne, 2);
     
            $countOneArr = array_intersect($ticketWinOneArr, $ticketOneArr);
            $countOne = count($countOneArr);

            if ($countOne > 1) {
                if ($countOne == 2) {
                    $win = 'Вы выйграли 100 рублей!';
                    $winMoney = 100;
                }
                if ($countOne == 3) {
                    $win = 'Вы выйграли 300 рублей!';
                    $winMoney = 300;
                }
                if ($countOne == 4) {
                    $win = 'Вы выйграли 600 рублей!';
                    $winMoney = 600;
                }
                if ($countOne == 5) {
                    $win = 'Вы выйграли 1000 рублей!';
                    $winMoney = 1000;
                }
                if ($countOne == 6) {
                    $win = 'Вы выйграли суперприз!';
                    $winMoney = $fond * 0.3;
                }
            } 
            else {
                $win = 'Ваш билет не выйграл!!!';
            }

            $model = User::where('id', '=', $ticket->user_id)->first();
            
            $money = strval(intval($model->money) + intval($winMoney));
            $model->money = $money;
            $model->save();

            UserWinnerModels::insert(array(
                'user_id' => $ticket->user_id,
                'numberGame' => 4,
                'circulation' => $ticket->circulation,
                'win' => $win
            ));
        }
        $models = DistGameModels::where('id','=',4)->first();
        $models->stopGame = true;
        $model->save();
        return redirect()->back()->with('info', 'Розыгрыш успешно прошел!');
    }

    public function goWinnerFiveGame() {

        $countOne = 0;
        $win = 0;

        $fond = FiveGameModels::sum('price');
        $winMoney = 0;

        $tickets = DB::table('fivegame')->where('circulation', FiveGameWinModels::max('circulation'))->get();
        $ticketWin = DB::table('fivegamewin')->where('circulation', FiveGameWinModels::max('circulation'))->first();
        
        $ticketWinOne = $ticketWin->ticketOne;
        $ticketWinOneArr = str_split($ticketWinOne, 2);

        foreach ($tickets as $ticket) {

            $ticketOne = $ticket->ticketOne;
                
            $ticketWinOneArr = str_split($ticketWinOne, 2);
            $ticketOneArr = str_split($ticketOne, 2);
     
            $countOneArr = array_intersect($ticketWinOneArr, $ticketOneArr);
            $countOne = count($countOneArr);

            if ($countOne != 5 && $countOne != 6 && $countOne != 7) {
                if ($countOne == 8 || $countOne == 4) {
                    $win = 'Вы выйграли 30 рублей!';
                    $winMoney = 30;
                }
                if ($countOne == 9 || $countOne == 3) {
                    $win = 'Вы выйграли 120 рублей!';
                    $winMoney = 120;
                }
                if ($countOne == 10 || $countOne == 2) {
                    $win = 'Вы выйграли 300 рублей!';
                    $winMoney = 300;
                }
                if ($countOne == 11 || $countOne == 1) {
                    $win = 'Вы выйграли 1500 рублей!';
                    $winMoney = 1500;
                }
                if ($countOne == 12 || $countOne == 0) {
                    $win = 'Вы выйграли суперприз!';
                    $winMoney = $fond * 0.3;
                }
            } 
            else 
                $win = 'Ваш билет не выйграл!!!';

            $model = User::where('id', '=', $ticket->user_id)->first();
            
            $money = strval(intval($model->money) + intval($winMoney));
            $model->money = $money;
            $model->save();

            UserWinnerModels::insert(array(
                'user_id' => $ticket->user_id,
                'numberGame' => 5,
                'circulation' => $ticket->circulation,
                'win' => $win
            ));
        }
        $models = DistGameModels::where('id','=',5)->first();
        $models->stopGame = true;
        $model->save();
        return redirect()->back()->with('info', 'Розыгрыш успешно прошел!');
    }

    public function goWinnerSixGame() {

        $countOne = 0;
        $countTwo = 0;
        $win = 0;

        $fond = SixGameModels::sum('price');
        $winMoney = 0;

        $tickets = DB::table('sixgame')->where('circulation', SixGameWinModels::max('circulation'))->get();
        $ticketWin = DB::table('sixgamewin')->where('circulation', SixGameWinModels::max('circulation'))->first();

        $ticketWinOne = $ticketWin->ticketOne;
        $ticketWinTwo = $ticketWin->ticketTwo;

        foreach ($tickets as $ticket) {

            //ticket user
            $ticketOne = $ticket->ticketOne;
            $ticketTwo = $ticket->ticketTwo;

            $ticketWinOneArr = str_split($ticketWinOne, 2);
            $ticketWinTwoArr = str_split($ticketWinTwo, 2);
            $ticketOneArr = str_split($ticketOne, 2);
            $ticketTwoArr = str_split($ticketTwo, 2);

            $countOneArr = array_intersect($ticketWinOneArr, $ticketOneArr);
            $countTwoArr = array_intersect($ticketWinTwoArr, $ticketTwoArr);

            $countOne = count($countOneArr);
            $countTwo = count($countTwoArr);
            $countTicketTwoUser = $ticketTwoArr;

            if ($countOne > 3) {
                if ($countTicketTwoUser < 2) {
                    if ($countOne == 4 && $countTwo == 1) {
                        $win = 'Вы выйграли 150 рублей!';
                        $winMoney = 150;
                    }
                    if ($countOne == 5 && $countTwo == 0) {
                        $win = 'Вы выйграли 300 рублей!';
                        $winMoney = 300;
                    }
                    if ($countOne == 5 && $countTwo == 1) {
                        $win = 'Вы выйграли 500 рублей!';
                        $winMoney = 500;
                    }
                    if ($countOne == 6 && $countTwo == 0) {
                        $win = 'Вы выйграли 1000 рублей!';
                        $winMoney = 1000;
                    }
                    if ($countOne == 6 && $countTwo == 1) {
                        $win = 'Вы выйграли 1000 рублей!';
                        $winMoney = 1000;
                    }
                    if ($countOne == 7 && $countTwo == 0) {
                        $win = 'Вы выйграли 1500 рублей!';
                        $winMoney = 1500;
                    }
                    if ($countOne == 7 && $countTwo == 1) {
                        $win = 'Вы выйграли 2500 рублей!';
                        $winMoney = 2000;
                    }
                    if ($countOne == 8 && $countTwo == 0) {
                        $win = 'Вы выйграли 5000 рублей!';
                        $winMoney = 3000;
                    }
                    if ($countOne == 8 && $countTwo == 1) {
                        $win = 'Вы выйграли суперприз!';
                        $winMoney = $fond * 0.3;
                    }
                }
                if ($countTicketTwoUser == 2) {
                    if ($countOne == 4) {
                        $win = 'Вы выйграли 150 рублей!';
                        $winMoney = 150;
                    }
                    if ($countOne == 5 && $countTwo == 0) {
                        $win = 'Вы выйграли 300 рублей!';
                        $winMoney = 300;
                    }
                    if ($countOne == 5 && $countTwo == 1) {
                        $win = 'Вы выйграли 400 рублей!';
                        $winMoney = 300;
                    }
                    if ($countOne == 6 && $countTwo == 0) {
                        $win = 'Вы выйграли 1000 рублей!';
                        $winMoney = 1000;
                    }
                    if ($countOne == 6 && $countTwo == 1) {
                        $win = 'Вы выйграли 1500 рублей!';
                        $winMoney = 1000;
                    }
                    if ($countOne == 7 && $countTwo == 0) {
                        $win = 'Вы выйграли 5000 рублей!';
                        $winMoney = 2000;
                    }
                    if ($countOne == 7 && $countTwo == 1) {
                        $win = 'Вы выйграли 7000 рублей!';
                        $winMoney = 2000;
                    }
                    if ($countOne == 8 && $countTwo == 0) {
                        $win = 'Вы выйграли 10000 рублей!';
                        $winMoney = 3000;
                    }
                    if ($countOne == 8 && $countTwo == 1) {
                        $win = 'Вы выйграли суперприз!';
                        $winMoney = $fond * 0.3;
                    }
                }
                if ($countTicketTwoUser == 3) {
                    if ($countOne == 4) {
                        $win = 'Вы выйграли 150 рублей!';
                        $winMoney = 250;
                    }
                    if ($countOne == 5 && $countTwo == 0) {
                        $win = 'Вы выйграли 300 рублей!';
                        $winMoney = 400;
                    }
                    if ($countOne == 5 && $countTwo == 1) {
                        $win = 'Вы выйграли 300 рублей!';
                        $winMoney = 500;
                    }
                    if ($countOne == 6 && $countTwo == 0) {
                        $win = 'Вы выйграли 600 рублей!';
                        $winMoney = 600;
                    }
                    if ($countOne == 6 && $countTwo == 1) {
                        $win = 'Вы выйграли 900 рублей!';
                        $winMoney = 900;
                    }
                    if ($countOne == 7 && $countTwo == 0) {
                        $win = 'Вы выйграли 1500 рублей!';
                        $winMoney = 1500;
                    }
                    if ($countOne == 7 && $countTwo == 1) {
                        $win = 'Вы выйграли 1500 рублей!';
                        $winMoney = 2000;
                    }
                    if ($countOne == 8 && $countTwo == 0) {
                        $win = 'Вы выйграли 4500 рублей!';
                        $winMoney = 4500;
                    }
                    if ($countOne == 8 && $countTwo == 1) {
                        $win = 'Вы выйграли суперприз!';
                        $winMoney = $fond * 0.3;
                    }
                }
                if ($countTicketTwoUser == 4) {
                    if ($countOne == 5 && $countTwo == 0) {
                        $win = 'Вы выйграли 165 рублей!';
                        $winMoney = 165;
                    }
                    if ($countOne == 5 && $countTwo == 1) {
                        $win = 'Вы выйграли 165 рублей!';
                        $winMoney = 165;
                    }
                    if ($countOne == 6 && $countTwo == 0) {
                        $win = 'Вы выйграли 900 рублей!';
                        $winMoney = 900;
                    }
                    if ($countOne == 6 && $countTwo == 1) {
                        $win = 'Вы выйграли 900 рублей!';
                        $winMoney = 900;
                    }
                    if ($countOne == 7 && $countTwo == 0) {
                        $win = 'Вы выйграли 4500 рублей!';
                        $winMoney = 4500;
                    }
                    if ($countOne == 7 && $countTwo == 1) {
                        $win = 'Вы выйграли 4500 рублей!';
                        $winMoney = 4500;
                    }
                    if ($countOne == 8 && $countTwo == 0) {
                        $win = 'Вы выйграли суперприз!';
                        $winMoney = $fond * 0.3;
                    }
                    if ($countOne == 8 && $countTwo == 1) {
                        $win = 'Вы выйграли суперприз!';
                        $winMoney = $fond * 0.3;
                    }
                }
            } 
            else 
                $win = 'Ваш билет не выйграл!!!';

            $model = User::where('id', '=', $ticket->user_id)->first();
            
            $money = strval(intval($model->money) + intval($winMoney));
            $model->money = $money;
            $model->save();

            UserWinnerModels::insert(array(
                'user_id' => $ticket->user_id,
                'numberGame' => 6,
                'circulation' => $ticket->circulation,
                'win' => $win
            ));
        }
        $models = DistGameModels::where('id','=',6)->first();
        $models->stopGame = true;
        $model->save();
        return redirect()->back()->with('info', 'Розыгрыш успешно прошел!');
    }

    public function replaceOneGame(Request $request) {

        $newPrice = $request->input('price');

        $model = PriceGameModels::where('id', '=', 1)->first();
        $model->price = $newPrice;
        $model->save();

        return redirect()->back()->with('info', 'Цена успешно изменена!');

    }

    public function replaceTwoGame(Request $request) {

        $newPrice = $request->input('price');

        $model = PriceGameModels::where('id', '=', 2)->first();
        $model->price = $newPrice;
        $model->save();

        return redirect()->back()->with('info', 'Цена успешно изменена!');

    }

    public function replaceThreeGame(Request $request) {

        $newPrice = $request->input('price');

        $model = PriceGameModels::where('id', '=', 3)->first();
        $model->price = $newPrice;
        $model->save();

        return redirect()->back()->with('info', 'Цена успешно изменена!');

    }

    public function replaceFourGame(Request $request) {

        $newPrice = $request->input('price');

        $model = PriceGameModels::where('id', '=', 4)->first();
        $model->price = $newPrice;
        $model->save();

        return redirect()->back()->with('info', 'Цена успешно изменена!');

    }

    public function replaceFiveGame(Request $request) {

        $newPrice = $request->input('price');

        $model = PriceGameModels::where('id', '=', 5)->first();
        $model->price = $newPrice;
        $model->save();

        return redirect()->back()->with('info', 'Цена успешно изменена!');

    }

    public function replaceSixGame(Request $request) {

        $newPrice = $request->input('price');

        $model = PriceGameModels::where('id', '=', 6)->first();
        $model->price = $newPrice;
        $model->save();

        return redirect()->back()->with('info', 'Цена успешно изменена!');

    }

    public function speedGame(Request $request) {
        $mon = $_GET['test'];
        $model = User::where('id', '=', Auth::user()->getId())->first();
        $mon = strval(intval($model->money) + intval($mon));
        $model->money = $mon;
        $model->save();
    }

}
