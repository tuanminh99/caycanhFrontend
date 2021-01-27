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

use App\Http\Controllers\Layout_Controller;
Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'layout'], function () {
    Route::get('master', 'Layout_Controller@master' );
    Route::get('index', 'Layout_Controller@index' )->name('index');
    Route::get('gioithieu', 'Layout_Controller@gioithieu' )->name('gioithieu');
    Route::get('sanpham', 'Layout_Controller@sanpham' )->name('sanpham');
    Route::get('tim-kiem', 'Layout_Controller@timkiem')->name('timkiem');
    Route::get('tintuc', 'Layout_Controller@tintuc' )->name('tintuc');
    Route::get('lienhe', 'Layout_Controller@lienhe' )->name('lienhe');
    Route::get('sanphamchitiet/{id}', 'Layout_Controller@sanphamchitiet' )->name('sanphamchitiet');
    Route::get('loaisanpham/{slug}', 'Layout_Controller@loaisanpham' )->name('loaisanpham');
    Route::get('tintucchitiet/{id}', 'Layout_Controller@tintucchitiet' )->name('tintucchitiet');
    Route::post('lienhe', 'Layout_Controller@lienhes' )->name('lienhes');

    Route::get('addcart/{id}', 'Layout_Controller@addcart' )->name('addcart');
    Route::get('giohang', 'Layout_Controller@giohang' )->name('giohang');
    Route::get('updatecart', 'Layout_Controller@updatecart' )->name('updatecart');
    Route::get('deletecart', 'Layout_Controller@deletecart' )->name('deletecart');
    Route::get('thanhtoan', 'Layout_Controller@thanhtoan' )->name('thanhtoan');
    Route::get('cash_payment', 'Layout_Controller@cash_payment' )->name('cash_payment');

    Route::post('login_customer', 'Layout_Controller@login_customer' )->name('login_customer');
    Route::get('login_checkout', 'Layout_Controller@login_checkout' )->name('login_checkout');
    Route::get('logout_checkout', 'Layout_Controller@logout_checkout' )->name('logout_checkout');
    Route::get('signup_checkout', 'Layout_Controller@signup_checkout' )->name('signup_checkout');
    Route::post('add_customer', 'Layout_Controller@add_customer' )->name('add_customer');
    Route::post('save_checkout', 'Layout_Controller@save_checkout' )->name('save_checkout');
});
