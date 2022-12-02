<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apply;
use App\Models\Study;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
	public function index(Request $request){
		return view('user.payment');
	}


	public function payment(Request $request)
	{
//  $request->payjp-token = $customer->id;
 //  シークレットキーを設定
    \Payjp\Payjp::setApiKey(config('payjp.secret_key'));
    
    //  顧客情報登録
    $customer = \Payjp\Customer::create([
      // カード情報も合わせて登録する
      'card' => $request->get('payjp-token'),
      // 概要
      'description' => "userId: user->id, userName: name",
    ]);
    

    //  支払い処理
    // 新規支払い情報作成
    \Payjp\Charge::create([
       // 上記で登録した顧客のidを指定
       "customer" => 'cus_5c818a975bc248e8912b16b1ac55',
       // 金額
       "amount" => 100,
       // 通貨
       "currency" => 'jpy',
    ]);
    return redirect(route('user.home'))->with('msg', '支払いが完了しました');
  

	}


}

