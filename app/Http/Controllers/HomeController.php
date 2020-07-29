<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FondModels;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
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
    }
}
