<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
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




Route::get('/',[PageController::class,'index']);
//show tournaments
Route::get('/tournaments',[PageController::class,'show_tournaments']);
//show profile page
Route::get('/myprofile',[PageController::class,'user_profile']);
Route::get('/register',[UserController::class,'create']);
//create new user
Route::post('/users',[UserController::class,'store']);
//show login form
Route::get('/login',[UserController::class,'login']);
//login user
Route::post('/users/authenticate',[UserController::class,'authenticate']);
//logout user
Route::post('/logout',[UserController::class,'logout']);


