<?php

use App\Http\Controllers\Ajax\EventController;
use App\Http\Controllers\Ajax\FswController;
use App\Http\Controllers\Ajax\MonthEventController;
use App\Http\Controllers\Ajax\SearchEventController;


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

// Route::get('event', 'EventController@index');


Route::get('api/event', [EventController::class, 'index']);
Route::get('api/event/course/{any}', [FswController::class, 'search']);
Route::get('api/event/month/{any}', [MonthEventController::class, 'month']);
Route::get('api/event/search', [SearchEventController::class, 'search']);


Route::get('/{any}', function () {
    return view('welcome');
})->where('any','.*');

// Route::get('/{any}/{other}', function () {
//     dd('kokotootteruka?');
//     return view('welcome');
// });