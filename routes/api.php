<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//si generano URL che restituisce un oggetto json
//ci servirà come API


Route::namespace('Api')
//namespace è il path che ci porta al file
    ->prefix('/doctors')
    ->group(function(){

        //localhost:8000/api/doctors
        Route::get('/', 'DoctorController@index');

        //localhost:8000/api/doctors/id
        Route::get('/{id}', 'DoctorController@show');
        //Route::post('/', 'DoctorController@store');
        Route::get('/', 'DoctorController@filter');
    });


    //creare un controller dentro una cartelle API
    // php artisan make:controller Api/DoctorController --api //
    //ci ritornerà un controller di Risorsa per le API


Route::namespace('Api')
//namespace è il path che ci porta al file
     ->prefix('/specializations')
     ->group(function(){
         //localhost:8000/api/posts
         Route::get('/', 'SpecializationsController@index');
         //scritta la Route, dovremo portarci in pagina la lista dei TAGS, coi POST allegati
//         Route::get('/{name}', 'SpecializationsController@show');
     });


Route::namespace('Api')
    ->prefix('/message')
    ->group(function(){
        Route::post('/', 'MessageController@store');
    });



Route::namespace('Api')
    ->prefix('/review')
    ->group(function(){
        Route::post('/', 'ReviewController@store');
    });
