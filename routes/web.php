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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','\App\Http\Controllers\HomeController@home')->name('home');
Route::get('/apply','\App\Http\Controllers\HomeController@apply')->name('apply');
Route::get('/payment','\App\Http\Controllers\HomeController@payment')->name('payment');
Route::get('/success','\App\Http\Controllers\HomeController@success')->name('success');
Route::get('/search','\App\Http\Controllers\HomeController@search')->name('search');
Route::get('/mode','\App\Http\Controllers\HomeController@mode')->name('mode');

Route::get('/pay','\App\Http\Controllers\HomeController@pay')->name('pay');
Route::get('/login','\App\Http\Controllers\HomeController@login')->name('login');
Route::get('/transcriptdetail','\App\Http\Controllers\HomeController@transcriptdetail')->name('transcriptdetail');

Route::get('/dashboard','\App\Http\Controllers\HomeController@dashboard')->name('dashboard');
// Route::get('/login','\App\Http\Controllers\HomeController@login')->name('login');