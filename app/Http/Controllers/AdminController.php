<?php

namespace App\Http\Controllers;

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
use App\Models\SixGameWinModels;
use App\Models\SixGameModels;
use Illuminate\Http\Request;
use DB; 

class AdminController extends Controller
{
    public function goWinnerOneGame() {
        $i = 1;
        $countOne = 0;
        $countTwo = 0;
        $win = 0;

        while (true) {
            if (OneGameModels::find($i)) {
                $tickets = OneGameModels::find($i);

                $ticketWin = OneGameWinModels::find($tickets['circulation']);
                $ticketWinOne = $ticketWin["ticketOne"];
                $ticketWinTwo = $ticketWin["ticketTwo"];

                $ticketOne = $tickets['ticketOne'];
                $ticketTwo = $tickets['ticketTwo'];

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
                            $win = 'Вы выйграли 12 категорию';
                        }
                        if ($countTwo == 3) {
                            $win = 'Вы выйграли 9 категорию';
                        }
                        if ($countTwo == 4) {
                            $win = 'Вы выйграли 5 категорию';
                        }
                    }
                    if ($countOne != 0 && $countTwo == 0) {
                        if ($countOne == 2) {
                            $win = 'Вы выйграли 12 категорию';
                        }
                        if ($countOne == 3) {
                            $win = 'Вы выйграли 9 категорию';
                        }
                        if ($countOne == 4) {
                            $win = 'Вы выйграли 5 категорию';
                        }
                    }
                    if ($countOne == 4 && $countTwo == 4) {
                        $win = 'Вы выйграли 1 категорию';
                    }
                    if ($countOne == 4 && $countTwo == 3) {
                        $win = 'Вы выйграли 2 категорию';
                    }
                    if ($countOne == 3 && $countTwo == 4) {
                        $win = 'Вы выйграли 2 категорию';
                    }
                    if ($countOne == 4 && $countTwo == 2) {
                        $win = 'Вы выйграли 3 категорию';
                    }
                    if ($countOne == 2 && $countTwo == 4) {
                        $win = 'Вы выйграли 3 категорию';
                    }
                    if ($countOne == 4 && $countTwo == 1) {
                        $win = 'Вы выйграли 4 категорию';
                    }
                    if ($countOne == 1 && $countTwo == 4) {
                        $win = 'Вы выйграли 4 категорию';
                    }
                    if ($countOne == 3 && $countTwo == 3) {
                        $win = 'Вы выйграли 5 категорию';
                    }
                    if ($countOne == 3 && $countTwo == 2) {
                        $win = 'Вы выйграли 7 категорию';
                    }
                    if ($countOne == 2 && $countTwo == 3) {
                        $win = 'Вы выйграли 7 категорию';
                    }
                    if ($countOne == 3 && $countTwo == 1) {
                        $win = 'Вы выйграли 8 категорию';
                    }
                    if ($countOne == 1 && $countTwo == 3) {
                        $win = 'Вы выйграли 8 категорию';
                    }
                    if ($countOne == 2 && $countTwo == 2) {
                        $win = 'Вы выйграли 10 категорию';
                    }
                    if ($countOne == 2 && $countTwo == 1) {
                        $win = 'Вы выйграли 11 категорию';
                    }
                    if ($countOne == 1 && $countTwo == 2) {
                        $win = 'Вы выйграли 11 категорию';
                    }
                } else {
                    $win =  0;
                }

                UserWinnerModels::insert(array(
                    'user_id' => $tickets['user_id'],
                    'numberGame' => 1,
                    'circulation' => $tickets['circulation'],
                    'win' => $win
                ));
            }
            else {
                break;
            }
            $i++;
        }   
        return redirect()->back()->with('info', 'Розыгрыш успешно прошел!');
    }

    public function goWinnerTwoGame() {
        $i = 1;
        $countOne = 0;
        $countTwo = 0;
        $win = 0;

        while (true) {
            if (TwoGameModels::find($i)) {
                $tickets = TwoGameModels::find($i);

                $ticketWin = TwoGameWinModels::find($tickets['circulation']);
                $ticketWinOne = $ticketWin["ticketOne"];
                $ticketWinTwo = $ticketWin["ticketTwo"];

                $ticketOne = $tickets['ticketOne'];
                $ticketTwo = $tickets['ticketTwo'];

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
                        $win = 'Вы выйграли суперприз!';
                    }
                    if ($countTwo == 0) {
                        if ($countOne == 2) {
                            $win = 'Вы выйграли 40 рублей!';
                        }
                        if ($countOne == 3) {
                            $win = 'Вы выйграли 400 рублей!';
                        }
                        if ($countOne == 4) {
                            $win = 'Вы выйграли 4000 рублей!';
                        }
                        if ($countOne == 5) {
                            $win = 'Вы выйграли приз!';
                        }
                    }
                } 
                else {
                    $win = 'Ваш билет не выйграл!!!';
                }

                UserWinnerModels::insert(array(
                    'user_id' => $tickets['user_id'],
                    'numberGame' => 2,
                    'circulation' => $tickets['circulation'],
                    'win' => $win
                ));
            }
            else {
                break;
            }
            $i++;
        }   
        return redirect()->back()->with('info', 'Розыгрыш успешно прошел!');
    }

    public function goWinnerThreeGame() {
        $i = 1;
        $countOne = 0;
        $countTwo = 0;
        $win = 0;

        while (true) {
            if (ThreeGameModels::find($i)) {
                $tickets = ThreeGameModels::find($i);

                $ticketWin = ThreeGameWinModels::find($tickets['circulation']);
                $ticketWinOne = $ticketWin["ticketOne"];
                
                $ticketOne = $tickets['ticketOne'];
                
                $ticketWinOneArr = str_split($ticketWinOne, 2);
                $ticketOneArr = str_split($ticketOne, 2);
         

                $countOneArr = array_intersect($ticketWinOneArr, $ticketOneArr);

                $countOne = count($countOneArr);

                if ($countOne != 0) {
                    if ($countOne == 2) {
                        $win =  'Вы выйграли 50 рублей!';
                    }
                    if ($countOne == 3) {
                        $win = 'Вы выйграли 100 рублей!';
                    }
                    if ($countOne == 4) {
                        $win = 'Вы выйграли 350 рублей!';
                    }
                    if ($countOne == 5) {
                        $win = 'Вы выйграли 3000 рублей!';
                    }
                    if ($countOne == 6) {
                        $win = 'Вы выйграли 150000 рублей!';
                    }
                    if ($countOne == 7) {
                        $win = 'Вы выйграли суперприз!';
                    }
                } else {
                    $win = 'Ваш билет не выйграл!!!';
                }

                UserWinnerModels::insert(array(
                    'user_id' => $tickets['user_id'],
                    'numberGame' => 3,
                    'circulation' => $tickets['circulation'],
                    'win' => $win
                ));
            }
            else {
                break;
            }
            $i++;
        }   
        return redirect()->back()->with('info', 'Розыгрыш успешно прошел!');
    }

    public function goWinnerFourGame() {
        $i = 1;
        $countOne = 0;
        $countTwo = 0;
        $win = 0;

        while (true) {
            if (FourGameModels::find($i)) {
                $tickets = FourGameModels::find($i);

                $ticketWin = FourGameWinModels::find($tickets['circulation']);
                $ticketWinOne = $ticketWin["ticketOne"];
                
                $ticketOne = $tickets['ticketOne'];
                
                $ticketWinOneArr = str_split($ticketWinOne, 2);
                $ticketOneArr = str_split($ticketOne, 2);
         

                $countOneArr = array_intersect($ticketWinOneArr, $ticketOneArr);

                $countOne = count($countOneArr);

                if ($countOne != 0) {
                    if ($countOne == 2) {
                        $win = 'Вы выйграли 100 рублей!';
                    }
                    if ($countOne == 3) {
                        $win = 'Вы выйграли 300 рублей!';
                    }
                    if ($countOne == 4) {
                        $win = 'Вы выйграли 3000 рублей!';
                    }
                    if ($countOne == 5) {
                        $win = 'Вы выйграли 200000 рублей!';
                    }
                    if ($countOne == 6) {
                        $win = 'Вы выйграли суперприз!';
                    }
                } 
                else {
                    $win = 'Ваш билет не выйграл!!!';
                }

                UserWinnerModels::insert(array(
                    'user_id' => $tickets['user_id'],
                    'numberGame' => 4,
                    'circulation' => $tickets['circulation'],
                    'win' => $win
                ));
            }
            else {
                break;
            }
            $i++;
        }   
        return redirect()->back()->with('info', 'Розыгрыш успешно прошел!');
    }

    public function goWinnerFiveGame() {
        $i = 1;
        $countOne = 0;
        $countTwo = 0;
        $win = 0;

        while (true) {
            if (FiveGameModels::find($i)) {
                $tickets = FiveGameModels::find($i);

                $ticketWin = FiveGameWinModels::find($tickets['circulation']);
                $ticketWinOne = $ticketWin["ticketOne"];
                
                $ticketOne = $tickets['ticketOne'];
                
                $ticketWinOneArr = str_split($ticketWinOne, 2);
                $ticketOneArr = str_split($ticketOne, 2);
         

                $countOneArr = array_intersect($ticketWinOneArr, $ticketOneArr);

                $countOne = count($countOneArr);

                if ($countOne != 5 && $countOne != 6 && $countOne != 7) {
                    if ($countOne == 8 || $countOne == 4) {
                        $win = 'Вы выйграли 30 рублей!';
                    }
                    if ($countOne == 9 || $countOne == 3) {
                        $win = 'Вы выйграли 120 рублей!';
                    }
                    if ($countOne == 10 || $countOne == 2) {
                        $win = 'Вы выйграли 600 рублей!';
                    }
                    if ($countOne == 11 || $countOne == 1) {
                        $win = 'Вы выйграли 7500 рублей!';
                    }
                    if ($countOne == 12 || $countOne == 0) {
                        $win = 'Вы выйграли суперприз!';
                    }
                } else {
                    $win = 'Ваш билет не выйграл!!!';
                }

                UserWinnerModels::insert(array(
                    'user_id' => $tickets['user_id'],
                    'numberGame' => 5,
                    'circulation' => $tickets['circulation'],
                    'win' => $win
                ));
            }
            else {
                break;
            }
            $i++;
        }   
        return redirect()->back()->with('info', 'Розыгрыш успешно прошел!');
    }

    public function goWinnerSixGame() {
        $i = 1;
        $countOne = 0;
        $countTwo = 0;
        $win = 0;

        while (true) {
            if (SixGameModels::find($i)) {
                $tickets = SixGameModels::find($i);

                $ticketWin = SixGameWinModels::find($tickets['circulation']);
                $ticketWinOne = $ticketWin["ticketOne"];
                $ticketWinTwo = $ticketWin["ticketTwo"];

                $ticketOne = $tickets['ticketOne'];
                $ticketTwo = $tickets['ticketTwo'];

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
                            $win = 'Вы выйграли 150 рублей!';
                        }
                        if ($countOne == 5 && $countTwo == 0) {
                            $win = 'Вы выйграли 300 рублей!';
                        }
                        if ($countOne == 5 && $countTwo == 1) {
                            $win = 'Вы выйграли 750 рублей!';
                        }
                        if ($countOne == 6 && $countTwo == 0) {
                            $win = 'Вы выйграли 1500 рублей!';
                        }
                        if ($countOne == 6 && $countTwo == 1) {
                            $win = 'Вы выйграли 4500 рублей!';
                        }
                        if ($countOne == 7 && $countTwo == 0) {
                            $win = 'Вы выйграли 7500 рублей!';
                        }
                        if ($countOne == 7 && $countTwo == 1) {
                            $win = 'Вы выйграли 22500 рублей!';
                        }
                        if ($countOne == 8 && $countTwo == 0) {
                            $win = 'Вы выйграли 150000 рублей!';
                        }
                        if ($countOne == 8 && $countTwo == 1) {
                            $win = 'Вы выйграли суперприз!';
                        }
                    }
                    if ($countTwo == 2) {
                        if ($countOne == 4 && $countTwo == 1) {
                            $win = 'Вы выйграли 150 рублей!';
                        }
                        if ($countOne == 5 && $countTwo == 0) {
                            $win = 'Вы выйграли 600 рублей!';
                        }
                        if ($countOne == 5 && $countTwo == 1) {
                            $win = 'Вы выйграли 1050 рублей!';
                        }
                        if ($countOne == 6 && $countTwo == 0) {
                            $win = 'Вы выйграли 3000 рублей!';
                        }
                        if ($countOne == 6 && $countTwo == 1) {
                            $win = 'Вы выйграли 6000 рублей!';
                        }
                        if ($countOne == 7 && $countTwo == 0) {
                            $win = 'Вы выйграли 15000 рублей!';
                        }
                        if ($countOne == 7 && $countTwo == 1) {
                            $win = 'Вы выйграли 30000 рублей!';
                        }
                        if ($countOne == 8 && $countTwo == 0) {
                            $win = 'Вы выйграли 300000 рублей!';
                        }
                        if ($countOne == 8 && $countTwo == 1) {
                            $win = 'Вы выйграли суперприз!';
                        }
                    }
                    if ($countTwo == 3) {
                        if ($countOne == 4 && $countTwo == 1) {
                            $win = 'Вы выйграли 150 рублей!';
                        }
                        if ($countOne == 5 && $countTwo == 0) {
                            $win = 'Вы выйграли 900 рублей!';
                        }
                        if ($countOne == 5 && $countTwo == 1) {
                            $win = 'Вы выйграли 1350 рублей!';
                        }
                        if ($countOne == 6 && $countTwo == 0) {
                            $win = 'Вы выйграли 4500 рублей!';
                        }
                        if ($countOne == 6 && $countTwo == 1) {
                            $win = 'Вы выйграли 7500 рублей!';
                        }
                        if ($countOne == 7 && $countTwo == 0) {
                            $win = 'Вы выйграли 22500 рублей!';
                        }
                        if ($countOne == 7 && $countTwo == 1) {
                            $win = 'Вы выйграли 37500 рублей!';
                        }
                        if ($countOne == 8 && $countTwo == 0) {
                            $win = 'Вы выйграли 450000 рублей!';
                        }
                        if ($countOne == 8 && $countTwo == 1) {
                            $win = 'Вы выйграли суперприз + 300000 рублей!';
                        }
                    }
                    if ($countTwo == 4) {
                        if ($countOne == 5) {
                            $win = 'Вы выйграли 1650 рублей!';
                        }
                        if ($countOne == 6) {
                            $win = 'Вы выйграли 9000 рублей!';
                        }
                        if ($countOne == 7) {
                            $win = 'Вы выйграли 45000 рублей!';
                        }
                        if ($countOne == 8) {
                            $win = 'Вы выйграли суперприз + 450000 рублей!';
                        }
                    }
                } else {
                    $win = 'Ваш билет не выйграл!!!';
                }

                UserWinnerModels::insert(array(
                    'user_id' => $tickets['user_id'],
                    'numberGame' => 6,
                    'circulation' => $tickets['circulation'],
                    'win' => $win
                ));
            }
            else {
                break;
            }
            $i++;
        }   
        return redirect()->back()->with('info', 'Розыгрыш успешно прошел!');
    }

}
