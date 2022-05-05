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
    $mainContent = config('mainContent');
    return view('guest.home' , ["headerList" => $headerList], ["mainContent" => $mainContent] );
})->name('guest-home');

Route::get('/card', function () {
    $headerList = config('headerList');
    $comics = config('comics');
    
    return view('guest.card' , ["headerList" => $headerList], ["comics" => $comics] );
})->name('guest-card');

Route::get('/card/{id}', function ($id) {
    $headerList = config('headerList');
    $comics = config('comics');
    $mainContent = config('mainContent');
    if(is_numeric($id) && $id >= 0 && $id < count($comics)){
        return view('guest.card' , ["headerList" => $headerList], ["singleComic" => $comics[$id]], ["singleContent" => $mainContent[$id]] );
    } else {
        abort(404);
    }
    
})->name('guest-single-card');
