<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        //TODO: バリデーションを行う

        \Stripe\Stripe::setApiKey('sk_test_Odr1M8wgSlxOhJ3syVhIl8Vn00VcuUOfvu');

        $token = $request->stripeToken;

        try{
            $customer = \Stripe\Customer::create([
                "description" => "むちょこ道場",
                "source" => $token,
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
        // メールを送る準備
        $data = ['name' => $request->name,
            'email' => $request->email,
        ];

        // 問い合わせした人にメールする
        Mail::send('emails.charge.customer', $data, function ($message) use ($request) {
            $message->to($request->email, $request->name)
                ->subject('むちょこ道場へのお申し込みをありがとうございます');
        });

        // むちょこ道場の管理者にメールする
        Mail::send('emails.charge.admin', $data, function ($message) use ($request) {
            $message->to(env('MAIL_FROM_ADDRESS', 'hello@example.com'), env('MAIL_FROM_NAME', 'Example'))
                ->subject('むちょこ道場へお申し込みがありました');
        });

        return redirect('/credit_success');
    }

    public function inputCredit()
    {
        return view('credit');
    }
}
