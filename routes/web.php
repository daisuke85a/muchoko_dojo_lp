<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

Route::post('/stripe', 'ChargeController@create');

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/success', function () {
    return view('success');
});

Route::get('/canceled', function () {
    return view('canceled');
});

Route::get('/credit', 'ChargeController@inputCredit');

Route::get('/credit_success', function () {
    return view('credit_success');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', 'ContactController@send');
