<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/service', 'HomeController@service')->name('service');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/gallery', 'HomeController@gallery')->name('gallery');
Route::get('/success','HomeController@success')->name('success');
Route::get('/keluar', 'HomeController@logout')->name('keluar');





// Modal
Route::get('/booking','HomeController@booking')->name('booking');
Route::resource('customer', 'HomeController');




Route::prefix('Service')->group(function(){
    Route::get('/bridal', 'HomeController@bridal')->name('bridal');
    Route::get('/party', 'HomeController@party')->name('party');
    Route::get('/theatrical', 'HomeController@theatrical')->name('theatrical');
    Route::get('/television', 'HomeController@television')->name('television');
    Route::get('/commercial', 'HomeController@commercial')->name('commercial');
    Route::get('/movie', 'HomeController@movie')->name('movie');
 });

 Route::prefix('dashboard')
    ->namespace('Admin')
    ->middleware(['auth','admin'])
    ->group(function(){
        Route::get('/', 'DashboardController@index')->name('dashboard');
        Route::resource('form', 'FormController');
    });
