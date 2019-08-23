<?php

namespace App\Http\Controllers;

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
     * 課金する
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create(Request $request)
    {

        \Stripe\Stripe::setApiKey('sk_test_Odr1M8wgSlxOhJ3syVhIl8Vn00VcuUOfvu');

        $token = $request->stripeToken;

        try{
            $customer = \Stripe\Customer::create([
                "description" => "むちょこ道場",
                "source" => $token + 1,
                'email' => $request->email,
                'name' => $request->name,
            ]);


            $charge = \Stripe\Charge::create([
                'customer' => $customer->id,
                'amount' => 50000,
                'currency' => 'jpy',
                'description' => 'むちょこ道場',
            ]);
        }
        catch(\Exception $e){
            return redirect('/credit_failed');
        }

        // TODO: お客様と管理者にメールで決済成功を通知する


        return redirect('/credit_success');
    }

    public function inputCredit()
    {
        return view('credit');
    }
}
