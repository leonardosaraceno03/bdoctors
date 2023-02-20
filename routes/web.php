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

// Rotte per i medici loggati

Route::middleware('auth')->namespace('Admin')->prefix('admin')->name('admin.')->group(function () {

    Route::get('/', 'HomeController@index')->name('index');

    Route::resource('/doctors', DoctorController::class);

});

Auth::routes();

//QUA INSERIAMO LE ROTTE PER I MESSAGGI, LE RECENSIONI ED I VOTI

// Rotte per i messaggi
Route::post('/messages', 'MessageController@store')->name('messages.store');

// Rotte per le recensioni
Route::post('/reviews', 'ReviewController@store')->name('reviews.store');

// Rotta per i visitatori del sito
Route::get('{any?}', function () {
    return view('guest.home');
})->where("any", ".*");
