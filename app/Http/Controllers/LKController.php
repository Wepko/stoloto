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

        $billPayments = new \Qiwi\Api\BillPayments('eyJ2ZXJzaW9uIjoiUDJQIiwiZGF0YSI6eyJwYXlpbl9tZXJjaGFudF9zaXRlX3VpZCI6IjdkN2MyMmI1LWJjMTctNDU1Zi04NTdjLTExYjA1OTI1YTgyZCIsInVzZXJfaWQiOiI3OTYyNjg1MzQ1OCIsInNlY3JldCI6ImM2ZmVmNDBmYWM1ZTU1MDZkYmQyODk0OTJkODIzNmM2NTZlM2I5YjU5MTgzNDA2YmIzYzQ0ZmEwZTI2NWQ3Y2QifX0=');
        
        if (DB::table('refill')->where('user_id', Auth::user()->getId())->get()) {
            
            $refill = DB::table('refill')->where('user_id', Auth::user()->getId())->get();

            foreach ($refill as $ref) {
                $billId = $ref->id;
                /** @var \Qiwi\Api\BillPayments $billPayments */
                $response = $billPayments->getBillInfo($billId);
                if ($response["status"]["value"] == "PAID") {
                    $model = User::where('id', '=', Auth::user()->getId())->first();
                    
                    $money = strval(intval(Auth::user()->money()) + intval($response["amount"]["value"]));
                    $model->money = $money;
                    $model->save();

                    DB::table('refill')->where('id', $ref->id)->delete();
                }
                if ($response["status"]["value"] == "WAITING") {
                    $billPayments->cancelBill($billId);
                    DB::table('refill')->where('id', $ref->id)->delete();
                }
            }
        }
        return view('lk', ['userwinner' => UserWinnerModels::all()]);
    }

    public function logout(){
        Auth::logout();

        return redirect()->route('home');
    }

    public function refill(Request $request) {

        $billPayments = new \Qiwi\Api\BillPayments('eyJ2ZXJzaW9uIjoiUDJQIiwiZGF0YSI6eyJwYXlpbl9tZXJjaGFudF9zaXRlX3VpZCI6IjdkN2MyMmI1LWJjMTctNDU1Zi04NTdjLTExYjA1OTI1YTgyZCIsInVzZXJfaWQiOiI3OTYyNjg1MzQ1OCIsInNlY3JldCI6ImM2ZmVmNDBmYWM1ZTU1MDZkYmQyODk0OTJkODIzNmM2NTZlM2I5YjU5MTgzNDA2YmIzYzQ0ZmEwZTI2NWQ3Y2QifX0=');
        $count = DB::table('refill')->max('id');

        RefillModels::insert(array(
            'user_id'  => Auth::user()->getId(),
            'price' => $request->input('price')
        ));

        $publicKey = '2S7mpWSvB93qSAr7uYNu2Vvnd2pTVzxEviw6chKKbG9xyy9pcxcvrmne6c6m7cUabcbN8Gnkjk77SEeN2YVBjf2bWuqw15YpX498gZpHhZZ32mxbfN9SmUVRUnNZGG4ucyHkByAyivprASsyt8xT7jw6BT35LDVBPEEYu4RLRFrfMS9JL6WcUMiduJMUAAoWip5q91t5aQGRX9J24EDrx8vhp9H25eS5a4';
        
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

}
