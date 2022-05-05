<?php

use Illuminate\Support\Facades\Route;

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
    $headerList = config('headerList');
    return view('guest.home' , ["headerList" => $headerList]);
})->name('guest-home');

Route::get('/contatti', function () {
    $headerList = config('headerList');
    return view('guest.contact' , ["headerList" => $headerList]);
});
