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
Route::post('/apply','\App\Http\Controllers\HomeController@saveapplication')->name('apply');

Route::get('/contact','\App\Http\Controllers\HomeController@contact')->name('contact');
Route::post('/contact','\App\Http\Controllers\HomeController@savecomplain')->name('contact');

Route::get('/payment','\App\Http\Controllers\HomeController@payment')->name('payment');
Route::get('/success','\App\Http\Controllers\HomeController@success')->name('success');

Route::get('/search','\App\Http\Controllers\HomeController@search')->name('search');
Route::post('/search','\App\Http\Controllers\HomeController@checktranscript')->name('search');


Route::get('/uploaded','\App\Http\Controllers\HomeController@uploaded')->name('uploaded');
Route::post('/uploaded','\App\Http\Controllers\HomeController@transupload')->name('uploaded');

Route::get('/mode','\App\Http\Controllers\HomeController@mode')->name('mode');

Route::get('/delivery','\App\Http\Controllers\HomeController@delivery')->name('delivery');

Route::get('/pay','\App\Http\Controllers\HomeController@pay')->name('pay');
Route::get('/transcriptlist','\App\Http\Controllers\HomeController@transcriptlist')->name('transcriptlist');
Route::get('/transcriptdetail','\App\Http\Controllers\HomeController@transcriptdetail')->name('transcriptdetail');

Route::get('/dashboard','\App\Http\Controllers\HomeController@dashboard')->name('dashboard');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
