<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\UserWinnerModels;
use App\Models\OneGameWinModels;
use App\Models\OneGameModels;
use App\Models\TwoGameWinModels;
use App\Models\TwoGameModels;
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
}
