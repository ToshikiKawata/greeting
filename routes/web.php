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
    return '';
});

Route::get('comments/{time}', [App\Http\Controllers\greetingController::class, 'greeting']);

Route::get('comments/freeword/{msg}', function($msg) {
    return view('freeword', ['msg' => $msg]);
});

//Route::get('comments/{random}', [App\Http\Controllers\greetingController::class, 'random']);