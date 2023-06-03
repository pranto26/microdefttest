<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\LoginController;


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
Route::get('/add',[MyController::class,'add']);
Route::post('/add',[MyController::class,'addsubmit']);
Route::post('/delete{id}',[MyController::class,'addsubmit']);
Route::get('/login',[LoginController::class,'login']);
Route::post('/login',[LoginController::class,'loginSubmit']);

