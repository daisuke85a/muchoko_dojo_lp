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

        dd($request);

        return redirect('/');
    }

    public function inputCredit()
    {
        return view('credit');
    }
}