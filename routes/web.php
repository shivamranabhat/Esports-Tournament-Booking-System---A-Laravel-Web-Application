<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\Tournament_AvatarController;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\PointsController;
use App\Http\Controllers\ProfileController;

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



// Admin
//Game routes
Route::get('/game',[GameController::class,'index']);
//Store games
Route::post('/game/store',[GameController::class,'store']);
//Tournament Avatar routes
Route::get('/tournament_avatar',[Tournament_AvatarController::class,'index']);
//Store tournament avatar
Route::post('/tournament_avatar/store',[Tournament_AvatarController::class,'store']);

//Organizer
//show dashboard
Route::get('/dashboard',[PageController::class,'dashboard']);
//show create tournament page
Route::get( 'create_tournament/{id}',[PageController::class,'create_tournament'])->name('create_tournament');
//Store tournament
Route::post('/tournament/store',[TournamentController::class,'store'])->middleware('auth');
//Store points
Route::post('/points/store',[PointsController::class,'store'])->middleware('auth');
//Calculate points
Route::post('/points/calculate',[PointsController::class,'calculate'])->middleware('auth');



//User
Route::get('/',[PageController::class,'index']);
//show tournaments
Route::get('/tournaments',[PageController::class,'show_tournaments']);
//show tournament details
Route::get('/details/{id}',[PageController::class,'tournament_details']);
//show profile page
Route::get('/myprofile',[PageController::class,'user_profile']);
//show edit profile page
Route::get('/editprofile',[ProfileController::class,'index']);
//save profile
Route::post('/profile/store',[ProfileController::class,'store'])->middleware('auth');
//edit userprofile
Route::get('/edit/{{id}}',[ProfileController::class,'edit'])->middleware('auth');
//show register page
Route::get('/register',[UserController::class,'create']);
//create new user
Route::post('/users',[UserController::class,'store']);
//show login form
Route::get('/login',[UserController::class,'login']);
//login user
Route::post('/users/authenticate',[UserController::class,'authenticate']);
//logout user
Route::post('/logout',[UserController::class,'logout']);
// Auth::routes(['verify' => true]);


