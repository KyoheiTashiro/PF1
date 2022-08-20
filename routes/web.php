<?php

use App\Http\Controllers\Ajax\EventController;
use App\Http\Controllers\Ajax\LatestEventController;
use App\Http\Controllers\Ajax\CourseController;
use App\Http\Controllers\Ajax\MonthEventController;
use App\Http\Controllers\Ajax\SearchEventController;
use App\Http\Controllers\Ajax\MylistController;

// use App\Http\Controllers\Ajax\PostMylistEventController;
// use App\Http\Controllers\Ajax\DeleteMylistEventController;
// use App\Http\Controllers\Ajax\MylistEventController;

// ↑ あとで消す




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


Auth::routes();


Route::get('api/event', [EventController::class, 'index']);
Route::get('api/event/latest', [LatestEventController::class, 'index']);
Route::get('api/event/course/{any}', [CourseController::class, 'index']);
Route::get('api/event/month/{any}', [MonthEventController::class, 'index']);
Route::get('api/event/search', [SearchEventController::class, 'index']);


// Route::post('api/event/post-mylist', [PostMylistEventController::class, 'post']);
// Route::post('api/event/delete-mylist', [DeleteMylistEventController::class, 'delete']);

// Route::group(['middleware' => 'auth'], function () {
  // Route::get('api/event/get-mylist', [MylistEventController::class, 'index']);
// });

// ↑ 記述も、controller自体も、不要なら消す


Route::post('api/event/post-mylist', [MylistController::class, 'store']);
Route::post('api/event/delete-mylist', [MylistController::class, 'destroy']);

Route::group(['middleware' => 'auth'], function () {
  Route::get('api/event/get-mylist', [MylistController::class, 'index']);
});


Route::get('/login-success', [App\Http\Controllers\LoginSuccessController::class, 'index'])->name('login_success');


Route::get('/{any}', function () {
    return view('welcome'); 
})->where('any','.*');
