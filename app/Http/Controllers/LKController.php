<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\UserWinnerModels;
use App\Models\RefillModels;
use Illuminate\Http\Request;
use DB;
require "BillPayments.php";


class LKController extends Controller
{

    public function index() {
        return view('lk', ['userwinner' => UserWinnerModels::all()]);
    }

    public function logout(){
        Auth::logout();

        return redirect()->route('home');
    }

    public function refill(Request $request) {

        $billPayments = new \Qiwi\Api\BillPayments('eyJ2ZXJzaW9uIjoiUDJQIiwiZGF0YSI6eyJwYXlpbl9tZXJjaGFudF9zaXRlX3VpZCI6IjdkN2MyMmI1LWJjMTctNDU1Zi04NTdjLTExYjA1OTI1YTgyZCIsInVzZXJfaWQiOiI3OTYyNjg1MzQ1OCIsInNlY3JldCI6IjRjN2UzZjkxMjg5YTEwYTg3NTRiYjY0MDU1NTMyMGU1OTQ2NjBjZWE2ZTdhZjlkYTQyMWQ2NGU3ZmVjOGM0ODUifX0=');
        $count = DB::table('refill')->max('id');

        RefillModels::insert(array(
            'user_id'  => Auth::user()->getId(),
            'price' => $request->input('price')
        ));

        $publicKey = '2S7mpWSvB93qSAr7uYNu2Vvnd2pTVzxEviw6chKKbG9xyy9pcxcvrmne6c6m7cUabcbN8Gnkjk77SEeN2YVBjf2bWuqw15YpX498gZpHhZZ32mxbfN9SmUVRUnNZGG4ucyHkByAyivprASsyt8xT7jw6BT35LDVBPEEYu4RLRFrfMTsmRXNnaHnVXZ412vsjmofXKncSw5jR4sd5VgeWQbduXF5U83HEW2';
        
        $params = [
            'publicKey' => $publicKey,
            'amount' => $request->input('price'),
            'billId' => $count + 1,
            'successUrl' => 'http://win-1.ru/lk',
        ];

        $link = $billPayments->createPaymentForm($params);

        //echo $link;
        return redirect($link);
    }

    public function refillStatus(Request $request) {
        
        $billId = $request->input("billId");

        /** @var \Qiwi\Api\BillPayments $billPayments */
        $response = $billPayments->getBillInfo($billId);

        $arr = json_decode($response);
        
        if($arr["status"]["value"] == "PAID") {
            $model = User::where('id', '=', Auth::user()->getId())->first();
            $price = strval(intval(user['money']) + intval($arr["amount"]["value"]));
            $model->money = $price;
            $model->save();
        }
        
    }

}
