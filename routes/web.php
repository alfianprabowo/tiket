<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Homepage Route
Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'App\Http\Controllers\WelcomeController@welcome')->name('welcome');
});

// Public Routes


// Auth Routes


// Route::get('/', function () {
//     return view('welcome');
// });
