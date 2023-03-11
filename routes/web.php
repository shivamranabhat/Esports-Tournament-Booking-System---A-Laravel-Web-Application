<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\Tournament_AvatarController;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\PointsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ResultsController;
use App\Http\Controllers\PerformanceController;

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

// Auth::routes(['verify' => true]);

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
//show select game page
Route::get('/select',[PageController::class,'select_game']);
//show create tournament page
Route::get( 'create_tournament/{id}',[PageController::class,'create_tournament'])->name('create_tournament');
//Store tournament
Route::post('/tournament/store',[TournamentController::class,'store'])->middleware('auth');
//edit tournament
Route::get('/tournament/edit/{id}',[TournamentController::class,'edit'])->middleware('auth');
//edit tournament
Route::put('/tournament/update/{id}',[TournamentController::class,'update'])->middleware('auth');
// delete tournament
Route::delete('/tournament/{id}', [TournamentController::class,'destroy'])->name('tournament.destroy');
//show points index page
Route::get('/points',[PointsController::class,'index'])->middleware('auth');
//store bookings
Route::post('/bookings/store',[BookingsController::class, 'store']);
//show participants to organizer
Route::get('/participants/{id}',[PageController::class,'participants']);
//show points  page
Route::get('/points/show',[PageController::class,'show_points'])->middleware('auth');
//show points calculate page
Route::get('/calculate/{id}',[PageController::class,'show_calculate'])->middleware('auth');
//Store points
Route::post('/points/store',[PointsController::class,'store'])->middleware('auth');
//Calculate points
Route::post('/calculate',[ResultsController::class,'store']);
//Show tournament results
Route::get('/result/{id}',[PageController::class,'show_result']);
//Show points table
Route::get('/points',[PageController::class, 'my_points']);
//Edit Points
Route::get('/points/edit/{id}',[PointsController::class,'edit']);
//Update Points
Route::put('/points/update/{id}',[PointsController::class,'update']);
// delete points
Route::delete('/points/{id}', [PointsController::class,'destroy'])->name('points.destroy');
//delete results
Route::delete('/result/{id}', [ResultsController::class,'destroy'])->name('results.destroy');





//User
Route::get('/',[PageController::class,'index']);
//show tournaments
Route::get('/tournaments',[PageController::class,'show_tournaments']);
//show tournament details
Route::get('/details/{id}',[PageController::class,'tournament_details']);
////////////////Profile ////////////////////////////////////
//show profile page
Route::get('/myprofile',[PageController::class,'user_profile']);
//show edit page for new users
Route::get('/editprofile',[ProfileController::class,'index']);
//save profile
Route::post('/profile/store',[ProfileController::class,'store'])->middleware('auth');
//show update profile page
Route::get('/profile/edit/{id}',[ProfileController::class,'edit']);
//update user's profile
Route::put('/profile/update/{id}',[ProfileController::class,'update']);
//save team info
Route::post('/team/store',[TeamController::class,'store'])->middleware('auth');
//edit userprofile
Route::get('/edit/{id}',[ProfileController::class,'edit'])->middleware('auth');
//update team
Route::put('/team/update/{id}',[TeamController::class,'update']);
//Delete team
Route::delete('/team/{id}',[TeamController::class,'destroy'])->name('team.destroy');
//show user dashboard
Route::get('/user_dashboard',[PerformanceController::class,'performance']);
//show result to user
Route::get('/userresults/{id}',[PageController::class,'user_result']);
//show tournament performance individually to user
Route::get('/performance/{id}',[PageController::class,'tournament_performance']);





////////////////Booking ////////////////////////////////////

//show bookings page
Route::get('/bookings/{id}',[PageController::class,'bookings']);


////////////////Handling user ////////////////////////////////////
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

