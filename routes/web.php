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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', function () {
    return view('greeting');
});


use App\Http\Controllers\UserController;
Route::prefix('user')->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::get('/store', [UserController::class, 'store']);
    Route::get('/update', [UserController::class, 'update']);
});

Route::get('/greeting', [GreetingController::class, 'show']);
