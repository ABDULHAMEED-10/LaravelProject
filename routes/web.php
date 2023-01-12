<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\rentACarController;
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

Route::get('/home', [rentACarController::class,'index']);
Route::get('/login', [rentACarController::class,'login_page']);
Route::get('/admin', [rentACarController::class,'admin_login']);
Route::get('/signup', [rentACarController::class,'sign_up']);
Route::get('/dash', [rentACarController::class,'dashboard']);

Route::post('/signup',[rentACarController::class,'reg']);
Route::post('/login',[rentACarController::class,'log']);
Route::post('/cart',[rentACarController::class,'cart']);

Route::post('/Add',[rentACarController::class,'car']);

Route::get('/Add',[rentACarController::class,'AddCar']);
Route::get('/Show',[rentACarController::class,'ShowCar']);

Route::get('/cart',[rentACarController::class,'index']);





Route::post('/update/{id}',[rentACarController::class,'update']);
Route::get('/update_view/{id}',[rentACarController::class,'update_view']);

Route::get('/delete/{id}',[rentACarController::class,'delete']);











