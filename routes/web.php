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
Route::get('/login', 'AdminController@login')->name('login');
Route::get('/register', 'AdminController@register')->name('register');
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
});
