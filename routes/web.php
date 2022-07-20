<?php

use App\Http\Controllers\Ajax\EventController;
use App\Http\Controllers\Ajax\LatestEventController;
use App\Http\Controllers\Ajax\CourseController;
use App\Http\Controllers\Ajax\MonthEventController;
use App\Http\Controllers\Ajax\SearchEventController;
use App\Http\Controllers\Ajax\PostMylistEventController;
use App\Http\Controllers\Ajax\DeleteMylistEventController;
use App\Http\Controllers\Ajax\MylistEventController;




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


Route::get('api/event', [EventController::class, 'event']);
Route::get('api/event/latest', [LatestEventController::class, 'latestEvent']);
Route::get('api/event/course/{any}', [CourseController::class, 'course']);
Route::get('api/event/month/{any}', [MonthEventController::class, 'month']);
Route::get('api/event/search', [SearchEventController::class, 'search']);


Route::post('api/event/post-mylist', [PostMylistEventController::class, 'postMylist']);

Route::post('api/event/delete-mylist', [DeleteMylistEventController::class, 'deleteMylist']);


Route::group(['middleware' => 'auth'], function () {
  Route::get('api/event/get-mylist', [MylistEventController::class, 'getMylist']);
});



Route::get('/login-success', [App\Http\Controllers\LoginSuccessController::class, 'loginSuccess'])->name('login_success');


Route::get('/{any}', function () {
    return view('welcome'); 
})->where('any','.*');
