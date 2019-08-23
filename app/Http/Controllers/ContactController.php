<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactToCustomer;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
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
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function send(Request $request)
    {

        // TODO::バリデーションする。必須表示する。

        // TODO::問い合わせした人にメールする
        $data = [ 'email' => $request->email ];
        Mail::send('emails.contact.customer', $data, function($message){
    	    $message->to('daisuke@gmail.com', 'お名前')
                        ->subject('むちょこ道場へのお問い合わせありがとうございます');
    	});


        // TODO::むちょこ道場の管理者にメールする

        // TODO::例外処理
        return redirect('/contact_success');
    }
}
