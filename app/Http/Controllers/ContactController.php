<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        dd($request);

        // TODO::バリデーションする。必須表示する。

        // TODO::問い合わせした人にメールする

        // TODO::むちょこ道場の管理者にメールする

        // TODO::例外処理
        return redirect('/contact_success');
    }
}