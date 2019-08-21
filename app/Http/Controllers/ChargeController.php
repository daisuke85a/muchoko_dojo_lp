<?php

namespace App\Http\Controllers;

use Cookie;
use Illuminate\Http\Request;

class ChargeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * サブスクリプションの課金を開始する
     * Cookieの値から判断する
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create(Request $request)
    {

        \Stripe\Stripe::setApiKey('sk_test_Odr1M8wgSlxOhJ3syVhIl8Vn00VcuUOfvu');

        $token = $request->stripeToken;

        //TODO: 例外処理
        $customer = \Stripe\Customer::create([
            "description" => "むちょこ道場",
            "source" => $token,
            'email' => $request->email,
            'name' => $request->name,
        ]);

        //TODO: 例外処理
        $charge = \Stripe\Charge::create([
            'customer' => $customer->id,
            'amount' => 50000,
            'currency' => 'jpy',
            'description' => 'むちょこ道場',
        ]);

        return redirect('/');
    }

    public function inputCredit()
    {
        return view('credit');
    }
}