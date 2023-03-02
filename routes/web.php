<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Specialization;


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
    Route::resource('/messages', MessageController::class);
    Route::resource('/reviews', ReviewController::class);
    Route::resource('/statistics', RatingController::class);
    Route::resource('/plans', PlanController::class);
    Route::get('/plans/{plan}/payment', 'PlanController@showPayment')->name('plans.payment.show');
});

Auth::routes();


// Rotta per i visitatori del sito

Route::get('/', function () {
    return view('guest.home');
})->name('guest.home');

Route::get('{any?}', function () {
    return view('guest.home');
})->where("any", ".*");
