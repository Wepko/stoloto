<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FondModels;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\UserWinnerModels;
use App\Models\RefillModels;
use App\Models\OutputModels;
use App\Models\TwoGameModels;
use App\Models\OneGameModels;
use App\Models\ThreeGameModels;
use App\Models\FourGameModels;
use App\Models\FiveGameModels;
use App\Models\SixGameModels;
use App\Models\JackPotModels;
use App\Models\TwoGameTimerModels;
use App\Models\OneGameTimerModels;
use App\Models\ThreeGameTimerModels;
use App\Models\FourGameTimerModels;
use App\Models\FiveGameTimerModels;
use App\Models\SixGameTimerModels;
use App\Models\TwoGameWinModels;
use App\Models\OneGameWinModels;
use App\Models\ThreeGameWinModels;
use App\Models\FourGameWinModels;
use App\Models\FiveGameWinModels;
use App\Models\SixGameWinModels;
use App\Models\RefUserModels;
use DB;
require "BillPayments.php";

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
    public function index() {

      $billPayments = new \Qiwi\Api\BillPayments('eyJ2ZXJzaW9uIjoiUDJQIiwiZGF0YSI6eyJwYXlpbl9tZXJjaGFudF9zaXRlX3VpZCI6IjdkN2MyMmI1LWJjMTctNDU1Zi04NTdjLTExYjA1OTI1YTgyZCIsInVzZXJfaWQiOiI3OTYyNjg1MzQ1OCIsInNlY3JldCI6ImM2ZmVmNDBmYWM1ZTU1MDZkYmQyODk0OTJkODIzNmM2NTZlM2I5YjU5MTgzNDA2YmIzYzQ0ZmEwZTI2NWQ3Y2QifX0=');

      if (DB::table('refill')->where('user_id', Auth::user()->getId())->get()) {
          
          $refill = DB::table('refill')->where('user_id', Auth::user()->getId())->get();

          foreach ($refill as $ref) {
              $billId = $ref->billId;
              /** @var \Qiwi\Api\BillPayments $billPayments */
              $response = $billPayments->getBillInfo($billId);

              if ($response["status"]["value"] == "PAID") {
                  $model = User::where('id', '=', Auth::user()->getId())->first();
                      
                  $money = strval(intval(Auth::user()->money()) + intval($response["amount"]["value"]));
                  $model->money = $money;
                  $model->save();

                  $refill_model = RefillModels::where('id', '=', $ref->id)->first();
                  $refill_model->status = "PAID";
                  $refill_model->save();

                  $billPayments->cancelBill($billId);

                  RefillModels::where('billId', '=', $ref->billId)->delete();
              }

              if ($response["status"]["value"] == "WAITING") {
                  $billPayments->cancelBill($billId);
                  
                  $refill_model = RefillModels::where('id', '=', $ref->id)->first();
                  $refill_model->status = "CANCELED";
                  $refill_model->save();
                  
                  RefillModels::where('billId', '=', $ref->billId)->delete();
              }
          } 
      }

      $usergame = [
          OneGameModels::where('user_id', '=', Auth::user()->getId())->get(),
          TwoGameModels::where('user_id', '=', Auth::user()->getId())->get(),
          ThreeGameModels::where('user_id', '=', Auth::user()->getId())->get(),
          FourGameModels::where('user_id', '=', Auth::user()->getId())->get(),
          FiveGameModels::where('user_id', '=', Auth::user()->getId())->get(),
          SixGameModels::where('user_id', '=', Auth::user()->getId())->get()
      ];

      $userwingame = [
        OneGameWinModels::all(),
        TwoGameWinModels::all(),
        ThreeGameWinModels::all(),
        FourGameWinModels::all(),
        FiveGameWinModels::all(),
        SixGameWinModels::all()
      ];

      $datagame = [
        OneGameTimerModels::where('id', '=', 1)->first(),
        TwoGameTimerModels::where('id', '=', 1)->first(),
        ThreeGameTimerModels::where('id', '=', 1)->first(),
        FourGameTimerModels::where('id', '=', 1)->first(),
        FiveGameTimerModels::where('id', '=', 1)->first(),
        SixGameTimerModels::where('id', '=', 1)->first()
      ];

        $infodist = JackPotModels::all();
        $ref = 'ref=' . Auth::user()->getId();

        if (count(DB::table('ref_user')->where('user_id', Auth::user()->getId())->get()) > 0) {
            $ref_users = DB::table('ref_user')->where('user_ref_id', Auth::user()->getId())->get();
            return view('lk', ['userwinner' => UserWinnerModels::all(), 'ref_users' => $ref_users, 'userwingame' => $userwingame, 'data' => $datagame, 'infodist' => $infodist, 'ref_link' => 'https://www.win-1.ru/reg/' . $ref])->with('usergame', $usergame);
        }
        else {
            $vm = Auth::user()->getRefId();
            if (isset($vm)) {
                RefUserModels::create([
                    'user_id' => Auth::user()->getId(),
                    'user_ref_id' => Auth::user()->getRefId(),
                    'status' => 1
                ]);
            }
            else {
                RefUserModels::create([
                    'user_id' => Auth::user()->getId(),
                    'status' => 0
                ]);
            }
        }

        return view('lk', ['userwinner' => UserWinnerModels::all(), 'userwingame' => $userwingame, 'data' => $datagame, 'infodist' => $infodist, 'ref_link' => 'https://www.win-1.ru/reg/' . $ref])->with('usergame', $usergame);
  }

  public function logout(){
      Auth::logout();

      return redirect()->route('home');
  }

  public function refill(Request $request) {

      $this->validate($request, [
          'price' => 'required'
      ]);

      $billPayments = new \Qiwi\Api\BillPayments('eyJ2ZXJzaW9uIjoiUDJQIiwiZGF0YSI6eyJwYXlpbl9tZXJjaGFudF9zaXRlX3VpZCI6IjdkN2MyMmI1LWJjMTctNDU1Zi04NTdjLTExYjA1OTI1YTgyZCIsInVzZXJfaWQiOiI3OTYyNjg1MzQ1OCIsInNlY3JldCI6ImM2ZmVmNDBmYWM1ZTU1MDZkYmQyODk0OTJkODIzNmM2NTZlM2I5YjU5MTgzNDA2YmIzYzQ0ZmEwZTI2NWQ3Y2QifX0=');

      $billId = $billPayments->generateId();

      RefillModels::insert(array(
          'user_id'  => Auth::user()->getId(),
          'billId' => $billId,
          'price' => $request->input('price'),
          'status' => "WAITING"
      ));

      $publicKey = '2S7mpWSvB93qSAr7uYNu2Vvnd2pTVzxEviw6chKKbG9xyy9pcxcvrmne6c6m7cUabcbN8Gnkjk77SEeN2YVBjf2bWuqw15YpX498gZpHhZZ32mxbfN9SmUVRUnNZGG4ucyHkByAyivprASsyt8xT7jw6BT35LDVBPEEYu4RLRFrfMS9JL6WcUMiduJMUAAoWip5q91t5aQGRX9J24EDrx8vhp9H25eS5a4';
      
      $params = [
          'publicKey' => $publicKey,
          'amount' => $request->input('price'),
          'billId' => $billId,
          'successUrl' => 'http://win-1.ru/lk',
      ];

      $link = $billPayments->createPaymentForm($params);

      //echo $link;
      return redirect($link);
  }

  public function output(Request $request) {

      $this->validate($request, [
          'price' => 'required',
          'card' => 'required'
      ]);

      if (Auth::user()->money() >= $request->input('price')) {

          $model = User::where('id', '=', Auth::user()->getId())->first();
          $model->money = strval(intval($model->money) - intval($request->input('price')));
          $model->save();

          OutputModels::insert(array(
              'user_id'  => Auth::user()->getId(),
              'cardNumber' => $request->input('card'),
              'price' => $request->input('price'),
              'status' => "WAITING"
          ));
  
          return redirect()->back()->with('info', 'Проходит модерация. Средства зачислятся в течение суток!');
      }
      else {
          return redirect()->back()->with('info', 'У вас нету столько средств!');
      }
  }
}
