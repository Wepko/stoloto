<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\OneGameWinModels;
use App\Models\TwoGameWinModels;
use App\Models\ThreeGameWinModels;
use App\Models\FourGameWinModels;
use App\Models\FiveGameWinModels;
use App\Models\SixGameWinModels;
use App\Models\OneGameModels;
use Illuminate\Http\Request;
use DB;

class ValidTicketController extends Controller
{
    public function validOneGame(Request $request) {

        if ($request->input('circulation') && $request->input('fieldOne') && $request->input('fieldTwo')) {

            $countOne = 0;
            $countTwo = 0;
            
            if (OneGameWinModels::find($request->input('circulation'))) {
                $ticketWin = OneGameWinModels::find($request->input('circulation'));
                $ticketWinOne = $ticketWin["ticketOne"];
                $ticketWinTwo = $ticketWin["ticketTwo"];

                $ticketOne = $request->input('fieldOne');
                $ticketTwo = $request->input('fieldTwo');

                $ticketWinOneArr = str_split($ticketWinOne, 2);
                $ticketWinTwoArr = str_split($ticketWinTwo, 2);
                $ticketOneArr = str_split($ticketOne, 2);
                $ticketTwoArr = str_split($ticketTwo, 2);

                $countOneArr = array_intersect($ticketWinOneArr, $ticketOneArr);
                $countTwoArr = array_intersect($ticketWinTwoArr, $ticketTwoArr);

                $countOne = count($countOneArr);
                $countTwo = count($countTwoArr);

                if ($countOne != 0 || $countTwo != 0) {
                    if ($countOne == 0 && $countTwo != 0) {
                        if ($countTwo == 2) {
                            return redirect()->back()->with('info', 'Вы выйграли 12 категорию');
                        }
                        if ($countTwo == 3) {
                            return redirect()->back()->with('info', 'Вы выйграли 9 категорию');
                        }
                        if ($countTwo == 4) {
                            return redirect()->back()->with('info', 'Вы выйграли 5 категорию');
                        }
                    }
                    if ($countOne != 0 && $countTwo == 0) {
                        if ($countOne == 2) {
                            return redirect()->back()->with('info', 'Вы выйграли 12 категорию');
                        }
                        if ($countOne == 3) {
                            return redirect()->back()->with('info', 'Вы выйграли 9 категорию');
                        }
                        if ($countOne == 4) {
                            return redirect()->back()->with('info', 'Вы выйграли 5 категорию');
                        }
                    }
                    if ($countOne == 4 && $countTwo == 4) {
                        return redirect()->back()->with('info', 'Вы выйграли 1 категорию');
                    }
                    if ($countOne == 4 && $countTwo == 3) {
                        return redirect()->back()->with('info', 'Вы выйграли 2 категорию');
                    }
                    if ($countOne == 3 && $countTwo == 4) {
                        return redirect()->back()->with('info', 'Вы выйграли 2 категорию');
                    }
                    if ($countOne == 4 && $countTwo == 2) {
                        return redirect()->back()->with('info', 'Вы выйграли 3 категорию');
                    }
                    if ($countOne == 2 && $countTwo == 4) {
                        return redirect()->back()->with('info', 'Вы выйграли 3 категорию');
                    }
                    if ($countOne == 4 && $countTwo == 1) {
                        return redirect()->back()->with('info', 'Вы выйграли 4 категорию');
                    }
                    if ($countOne == 1 && $countTwo == 4) {
                        return redirect()->back()->with('info', 'Вы выйграли 4 категорию');
                    }
                    if ($countOne == 3 && $countTwo == 3) {
                        return redirect()->back()->with('info', 'Вы выйграли 6 категорию');
                    }
                    if ($countOne == 3 && $countTwo == 2) {
                        return redirect()->back()->with('info', 'Вы выйграли 7 категорию');
                    }
                    if ($countOne == 2 && $countTwo == 3) {
                        return redirect()->back()->with('info', 'Вы выйграли 7 категорию');
                    }
                    if ($countOne == 3 && $countTwo == 1) {
                        return redirect()->back()->with('info', 'Вы выйграли 8 категорию');
                    }
                    if ($countOne == 1 && $countTwo == 3) {
                        return redirect()->back()->with('info', 'Вы выйграли 8 категорию');
                    }
                    if ($countOne == 2 && $countTwo == 2) {
                        return redirect()->back()->with('info', 'Вы выйграли 10 категорию');
                    }
                    if ($countOne == 2 && $countTwo == 1) {
                        return redirect()->back()->with('info', 'Вы выйграли 200 рублей');
                    }
                    if ($countOne == 1 && $countTwo == 2) {
                        return redirect()->back()->with('info', 'Вы выйграли 200 рублей');
                    }
                } else {
                    return redirect()->back()->with('info', 'Ваш билет не выйграл!!!');
                }
            } else {
                return redirect()->back()->with('info', 'Розыгрыш еще не проводился');
            }
        }
        return redirect()->back()->with('info', 'Заполните поля!');
    }

    public function validTwoGame(Request $request) {

        if ($request->input('circulation') && $request->input('fieldOne') && $request->input('fieldTwo')) {

            $countOne = 0;
            $countTwo = 0;
            
            if (TwoGameWinModels::find($request->input('circulation'))) {
                $ticketWin = TwoGameWinModels::find($request->input('circulation'));
                $ticketWinOne = $ticketWin["ticketOne"];
                $ticketWinTwo = $ticketWin["ticketTwo"];

                $ticketOne = $request->input('fieldOne');
                $ticketTwo = $request->input('fieldTwo');

                $ticketWinOneArr = str_split($ticketWinOne, 2);
                $ticketWinTwoArr = str_split($ticketWinTwo, 2);
                $ticketOneArr = str_split($ticketOne, 2);
                $ticketTwoArr = str_split($ticketTwo, 2);

                $countOneArr = array_intersect($ticketWinOneArr, $ticketOneArr);
                $countTwoArr = array_intersect($ticketWinTwoArr, $ticketTwoArr);

                $countOne = count($countOneArr);
                $countTwo = count($countTwoArr);

                if ($countOne != 0) {
                    if ($countOne == 5 && $countTwo == 1) {
                        return redirect()->back()->with('info', 'Вы выйграли суперприз!');
                    }
                    if ($countTwo == 0) {
                        if ($countOne == 2) {
                            return redirect()->back()->with('info', 'Вы выйграли 40 рублей!');
                        }
                        if ($countOne == 3) {
                            return redirect()->back()->with('info', 'Вы выйграли 400 рублей!');
                        }
                        if ($countOne == 4) {
                            return redirect()->back()->with('info', 'Вы выйграли 4000 рублей!');
                        }
                        if ($countOne == 5) {
                            return redirect()->back()->with('info', 'Вы выйграли приз!');
                        }
                    }
                } else {
                    return redirect()->back()->with('info', 'Ваш билет не выйграл!!!');
                }
            }
            return redirect()->back()->with('info', 'Розыгрыш еще не проводился');
        }
        return redirect()->back()->with('info', 'Заполните поля!');
    }

    public function validThreeGame(Request $request) {
        if ($request->input('circulation') && $request->input('fieldOne')) {

            $countOne = 0;
            $countTwo = 0;
            
            if (ThreeGameWinModels::find($request->input('circulation'))) {
                $ticketWin = ThreeGameWinModels::find($request->input('circulation'));
                $ticketWinOne = $ticketWin["ticketOne"];
                
                $ticketOne = $request->input('fieldOne');
            
                $ticketWinOneArr = str_split($ticketWinOne, 2);
                $ticketOneArr = str_split($ticketOne, 2);

                $countOneArr = array_intersect($ticketWinOneArr, $ticketOneArr);
                $countOne = count($countOneArr);

                if ($countOne != 0) {
                    if ($countOne == 2) {
                        return redirect()->back()->with('info', 'Вы выйграли 50 рублей!');
                    }
                    if ($countOne == 3) {
                        return redirect()->back()->with('info', 'Вы выйграли 100 рублей!');
                    }
                    if ($countOne == 4) {
                        return redirect()->back()->with('info', 'Вы выйграли 350 рублей!');
                    }
                    if ($countOne == 5) {
                        return redirect()->back()->with('info', 'Вы выйграли 3000 рублей!');
                    }
                    if ($countOne == 6) {
                        return redirect()->back()->with('info', 'Вы выйграли 150000 рублей!');
                    }
                    if ($countOne == 7) {
                        return redirect()->back()->with('info', 'Вы выйграли суперприз!');
                    }
                } else {
                    return redirect()->back()->with('info', 'Ваш билет не выйграл!!!');
                }
            }
            return redirect()->back()->with('info', 'Розыгрыш еще не проводился');
        }
        return redirect()->back()->with('info', 'Заполните поля!');
    }

    public function validFourGame(Request $request) {
        if ($request->input('circulation') && $request->input('fieldOne')) {

            $countOne = 0;
            $countTwo = 0;
            
            if (FourGameWinModels::find($request->input('circulation'))) {
                $ticketWin = FourGameWinModels::find($request->input('circulation'));
                $ticketWinOne = $ticketWin["ticketOne"];
                
                $ticketOne = $request->input('fieldOne');
            
                $ticketWinOneArr = str_split($ticketWinOne, 2);
                $ticketOneArr = str_split($ticketOne, 2);

                $countOneArr = array_intersect($ticketWinOneArr, $ticketOneArr);
                $countOne = count($countOneArr);

                if ($countOne != 0) {
                    if ($countOne == 2) {
                        return redirect()->back()->with('info', 'Вы выйграли 100 рублей!');
                    }
                    if ($countOne == 3) {
                        return redirect()->back()->with('info', 'Вы выйграли 300 рублей!');
                    }
                    if ($countOne == 4) {
                        return redirect()->back()->with('info', 'Вы выйграли 3000 рублей!');
                    }
                    if ($countOne == 5) {
                        return redirect()->back()->with('info', 'Вы выйграли 200000 рублей!');
                    }
                    if ($countOne == 6) {
                        return redirect()->back()->with('info', 'Вы выйграли суперприз!');
                    }
                } else {
                    return redirect()->back()->with('info', 'Ваш билет не выйграл!!!');
                }
            }
            return redirect()->back()->with('info', 'Розыгрыш еще не проводился');
        }
        return redirect()->back()->with('info', 'Заполните поля!');
    }

    public function validFiveGame(Request $request) {
        if ($request->input('circulation') && $request->input('fieldOne')) {

            $countOne = 0;
            $countTwo = 0;
            
            if (FiveGameWinModels::find($request->input('circulation'))) {
                $ticketWin = FiveGameWinModels::find($request->input('circulation'));
                $ticketWinOne = $ticketWin["ticketOne"];
                
                $ticketOne = $request->input('fieldOne');
            
                $ticketWinOneArr = str_split($ticketWinOne, 2);
                $ticketOneArr = str_split($ticketOne, 2);

                $countOneArr = array_intersect($ticketWinOneArr, $ticketOneArr);
                $countOne = count($countOneArr);

                if ($countOne != 5 && $countOne != 6 && $countOne != 7) {
                    if ($countOne == 8 || $countOne == 4) {
                        return redirect()->back()->with('info', 'Вы выйграли 30 рублей!');
                    }
                    if ($countOne == 9 || $countOne == 3) {
                        return redirect()->back()->with('info', 'Вы выйграли 120 рублей!');
                    }
                    if ($countOne == 10 || $countOne == 2) {
                        return redirect()->back()->with('info', 'Вы выйграли 600 рублей!');
                    }
                    if ($countOne == 11 || $countOne == 1) {
                        return redirect()->back()->with('info', 'Вы выйграли 7500 рублей!');
                    }
                    if ($countOne == 12 || $countOne == 0) {
                        return redirect()->back()->with('info', 'Вы выйграли суперприз!');
                    }
                } else {
                    return redirect()->back()->with('info', 'Ваш билет не выйграл!!!');
                }
            }
            return redirect()->back()->with('info', 'Розыгрыш еще не проводился');
        }
        return redirect()->back()->with('info', 'Заполните поля!');
    }

    public function validSixGame(Request $request) {
        
        if ($request->input('circulation') && $request->input('fieldOne') && $request->input('fieldTwo')) {

            $countOne = 0;
            $countTwo = 0;
            
            if (SixGameWinModels::find($request->input('circulation'))) {
                $ticketWin = SixGameWinModels::find($request->input('circulation'));
                $ticketWinOne = $ticketWin["ticketOne"];
                $ticketWinTwo = $ticketWin["ticketTwo"];

                $ticketOne = $request->input('fieldOne');
                $ticketTwo = $request->input('fieldTwo');

                $ticketWinOneArr = str_split($ticketWinOne, 2);
                $ticketWinTwoArr = str_split($ticketWinTwo, 2);
                $ticketOneArr = str_split($ticketOne, 2);
                $ticketTwoArr = str_split($ticketTwo, 2);

                $countOneArr = array_intersect($ticketWinOneArr, $ticketOneArr);
                $countTwoArr = array_intersect($ticketWinTwoArr, $ticketTwoArr);

                $countOne = count($countOneArr);
                $countTwo = count($countTwoArr);

                if ($countOne > 3) {
                    if ($countTwo < 2) {
                        if ($countOne == 4 && $countTwo == 1) {
                            return redirect()->back()->with('info', 'Вы выйграли 150 рублей!');
                        }
                        if ($countOne == 5 && $countTwo == 0) {
                            return redirect()->back()->with('info', 'Вы выйграли 300 рублей!');
                        }
                        if ($countOne == 5 && $countTwo == 1) {
                            return redirect()->back()->with('info', 'Вы выйграли 750 рублей!');
                        }
                        if ($countOne == 6 && $countTwo == 0) {
                            return redirect()->back()->with('info', 'Вы выйграли 1500 рублей!');
                        }
                        if ($countOne == 6 && $countTwo == 1) {
                            return redirect()->back()->with('info', 'Вы выйграли 4500 рублей!');
                        }
                        if ($countOne == 7 && $countTwo == 0) {
                            return redirect()->back()->with('info', 'Вы выйграли 7500 рублей!');
                        }
                        if ($countOne == 7 && $countTwo == 1) {
                            return redirect()->back()->with('info', 'Вы выйграли 22500 рублей!');
                        }
                        if ($countOne == 8 && $countTwo == 0) {
                            return redirect()->back()->with('info', 'Вы выйграли 150000 рублей!');
                        }
                        if ($countOne == 8 && $countTwo == 1) {
                            return redirect()->back()->with('info', 'Вы выйграли суперприз!');
                        }
                    }
                    if ($countTwo == 2) {
                        if ($countOne == 4 && $countTwo == 1) {
                            return redirect()->back()->with('info', 'Вы выйграли 150 рублей!');
                        }
                        if ($countOne == 5 && $countTwo == 0) {
                            return redirect()->back()->with('info', 'Вы выйграли 600 рублей!');
                        }
                        if ($countOne == 5 && $countTwo == 1) {
                            return redirect()->back()->with('info', 'Вы выйграли 1050 рублей!');
                        }
                        if ($countOne == 6 && $countTwo == 0) {
                            return redirect()->back()->with('info', 'Вы выйграли 3000 рублей!');
                        }
                        if ($countOne == 6 && $countTwo == 1) {
                            return redirect()->back()->with('info', 'Вы выйграли 6000 рублей!');
                        }
                        if ($countOne == 7 && $countTwo == 0) {
                            return redirect()->back()->with('info', 'Вы выйграли 15000 рублей!');
                        }
                        if ($countOne == 7 && $countTwo == 1) {
                            return redirect()->back()->with('info', 'Вы выйграли 30000 рублей!');
                        }
                        if ($countOne == 8 && $countTwo == 0) {
                            return redirect()->back()->with('info', 'Вы выйграли 300000 рублей!');
                        }
                        if ($countOne == 8 && $countTwo == 1) {
                            return redirect()->back()->with('info', 'Вы выйграли суперприз!');
                        }
                    }
                    if ($countTwo == 3) {
                        if ($countOne == 4 && $countTwo == 1) {
                            return redirect()->back()->with('info', 'Вы выйграли 150 рублей!');
                        }
                        if ($countOne == 5 && $countTwo == 0) {
                            return redirect()->back()->with('info', 'Вы выйграли 900 рублей!');
                        }
                        if ($countOne == 5 && $countTwo == 1) {
                            return redirect()->back()->with('info', 'Вы выйграли 1350 рублей!');
                        }
                        if ($countOne == 6 && $countTwo == 0) {
                            return redirect()->back()->with('info', 'Вы выйграли 4500 рублей!');
                        }
                        if ($countOne == 6 && $countTwo == 1) {
                            return redirect()->back()->with('info', 'Вы выйграли 7500 рублей!');
                        }
                        if ($countOne == 7 && $countTwo == 0) {
                            return redirect()->back()->with('info', 'Вы выйграли 22500 рублей!');
                        }
                        if ($countOne == 7 && $countTwo == 1) {
                            return redirect()->back()->with('info', 'Вы выйграли 37500 рублей!');
                        }
                        if ($countOne == 8 && $countTwo == 0) {
                            return redirect()->back()->with('info', 'Вы выйграли 450000 рублей!');
                        }
                        if ($countOne == 8 && $countTwo == 1) {
                            return redirect()->back()->with('info', 'Вы выйграли суперприз + 300000 рублей!');
                        }
                    }
                    if ($countTwo == 4) {
                        if ($countOne == 5) {
                            return redirect()->back()->with('info', 'Вы выйграли 1650 рублей!');
                        }
                        if ($countOne == 6) {
                            return redirect()->back()->with('info', 'Вы выйграли 9000 рублей!');
                        }
                        if ($countOne == 7) {
                            return redirect()->back()->with('info', 'Вы выйграли 45000 рублей!');
                        }
                        if ($countOne == 8) {
                            return redirect()->back()->with('info', 'Вы выйграли суперприз + 450000 рублей!');
                        }
                    }
                } else {
                    return redirect()->back()->with('info', 'Ваш билет не выйграл!!!');
                }
            }
            return redirect()->back()->with('info', 'Розыгрыш еще не проводился');
        }
        return redirect()->back()->with('info', 'Заполните поля!');
    }

    public function valid(Request $request) {
        if ($request->input('valid') == 0) {
            return redirect()->back()->with('info', 'Заполните поля!');
        }
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
