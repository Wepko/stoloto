<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\UserWinnerModels;
use Illuminate\Http\Request;
use DB;

class LKController extends Controller
{

    const SECRET_KEY = 'eyJ2ZXJzaW9uIjoiUDJQIiwiZGF0YSI6eyJwYXlpbl9tZXJjaGFudF9zaXRlX3VpZCI6IjdkN2MyMmI1LWJjMTctNDU1Zi04NTdjLTExYjA1OTI1YTgyZCIsInVzZXJfaWQiOiI3OTYyNjg1MzQ1OCIsInNlY3JldCI6ImQ2YzVkMTkyZjYxMjVkNjM2NTA4ZmI1M2VkODk4N2VhNWNiNjE1N2MxYjYxYzA2N2UyMmQ5N2Y4ODgzZmRiZGQifX0=';

    public function index() {
        return view('lk', ['userwinner' => UserWinnerModels::all()]);
    }

    public function logout(){
        Auth::logout();

        return redirect()->route('home');
    }

    public function refill() {
        $billPayments = new Qiwi\Api\BillPayments(SECRET_KEY);

        $publicKey = '2S7mpWSvB93qSAr7uYNu2Vvnd2pTVzxEviw6chKKbG9xyy9pcxcvrmne6c6m7cUabcbN8Gnkjk77SEeN2YVBjf2bWuqw15YpX498gZpHhZZ32mxbfN9SmUVRUnNZGG4ucyHkByAyivprASsyt8xT7jw6BT35LDVBPEEYu4RLRFrfMkzERYLEd5abGon8Eje6Z7PXCCNzRUKU8qskS4QBiz6qtUihNg91oi';
        $params = [
        'publicKey' => $publicKey,
        'amount' => 1,
        'billId' => '89626853458',
        'successUrl' => 'http://win-1/lk',
        ];

        /** @var \Qiwi\Api\BillPayments $billPayments */
        $link = $billPayments->createPaymentForm($params);

        //echo $link;
        return redirect($link);
    }
}
