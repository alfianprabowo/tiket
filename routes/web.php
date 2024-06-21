<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Homepage Route
Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'App\Http\Controllers\HomeController@home')->name('home');
});

// Auth Routes
Auth::routes();

Route::middleware(['auth'])->group(function () {
});
// Route::get('/', function () {
//     return view('welcome');
// });
