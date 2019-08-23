<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

        // バリデーションする。
        $validatedData = $request->validate([
            'name' => 'required',
            'contact' => 'required',
            'email' => 'required|email',
        ]);

        // メールを送る準備
        $data = ['name' => $request->name,
            'contact' => $request->contact,
            'email' => $request->email,
        ];

        // 問い合わせした人にメールする
        Mail::send('emails.contact.customer', $data, function ($message) use ($request) {
            $message->to($request->email, $request->name)
                ->subject('むちょこ道場へのお問い合わせありがとうございます');
        });

        // むちょこ道場の管理者にメールする
        Mail::send('emails.contact.admin', $data, function ($message) use ($request) {
            $message->to(env('MAIL_FROM_ADDRESS', 'hello@example.com'), env('MAIL_FROM_NAME', 'Example'))
                ->subject('むちょこ道場へお問い合わせがありました');
        });

        // メール送信の失敗は管理者がログで気づく想定
        return redirect('/contact_success');
    }
}
