<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminPageController;
use App\Http\Controllers\Admin\AdminTournamentController;
use App\Http\Controllers\Admin\AdminTeamController;
use App\Http\Controllers\Admin\AdminGameController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminAvatarController;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\PointsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ResultsController;
use App\Http\Controllers\RatingsController;
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
Route::prefix('/admin')->middleware('auth','isAdmin')->group(function(){
//Access admin index
Route::get('/index',[AdminPageController::class,'index'] )->name('index');
//Display Teams
Route::get('/teams',[AdminTeamController::class,'index'])->name('teams');
//Routes for Users
Route::prefix('/users')->group(function(){
    Route::get('/',[AdminUserController::class,'index'])->name('users');
    Route::get('/add',[AdminUserController::class,'create'])->name('add-user');
});
//Display Tournaments
Route::get('/tournaments',[AdminTournamentController::class,'index'])->name('tournaments');

//Routes for Games
Route::prefix('/games')->group(function(){
//Display Games
Route::get('/',[AdminGameController::class,'index'])->name('games');
//Add games
Route::get('/create',[AdminGameController::class,'create'])->name('add-game');
//Store games
Route::post('/store',[AdminGameController::class,'store'])->name('store-game');
});
//Routes for Avatars
Route::prefix('/avatars')->group(function(){
//Display Avatars
Route::get('/',[AdminAvatarController::class,'index'])->name('avatars');
//Add Avatars
Route::get('/add',[AdminAvatarController::class,'create'])->name('add-avatar');
//Store tournament avatar
Route::post('/store',[AdminAvatarController::class,'store'])->name('store-avatar');
});
});

Route::middleware('auth')->group(function(){
//Organizer
//show dashboard
Route::get('/dashboard',[PageController::class,'dashboard']);
//show select game page
Route::get('/select',[PageController::class,'select_game']);
//show create tournament page
Route::get( 'create_tournament/{id}',[PageController::class,'create_tournament'])->name('create_tournament');
//Store tournament
Route::post('/tournament/store',[TournamentController::class,'store']);
//edit tournament
Route::get('/tournament/edit/{id}',[TournamentController::class,'edit']);
//edit tournament
Route::put('/tournament/update/{id}',[TournamentController::class,'update']);
// delete tournament
Route::delete('/tournament/{id}', [TournamentController::class,'destroy'])->name('tournament.destroy');
//show points index page
Route::get('/points',[PointsController::class,'index']);
//store bookings
Route::post('/bookings/store',[BookingsController::class, 'store']);
//show participants to organizer
Route::get('/participants/{id}',[PageController::class,'participants']);
//show points  page
Route::get('/points/show',[PageController::class,'show_points']);
//show points calculate page
Route::get('/calculate/{id}',[PageController::class,'show_calculate']);
//Store points
Route::post('/points/store',[PointsController::class,'store']);
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


////////////////Profile ////////////////////////////////////
//show profile page
Route::get('/myprofile',[PageController::class,'user_profile']);
//show edit page for new users
Route::get('/editprofile',[ProfileController::class,'index']);
//save profile
Route::post('/profile/store',[ProfileController::class,'store']);
//show update profile page
Route::get('/profile/edit/{id}',[ProfileController::class,'edit']);
//update user's profile
Route::put('/profile/update/{id}',[ProfileController::class,'update']);
//save team info
Route::post('/team/store',[TeamController::class,'store']);
//edit userprofile
Route::get('/edit/{id}',[ProfileController::class,'edit']);
//update team
Route::put('/team/update/{id}',[TeamController::class,'update']);
//Delete team
Route::delete('/team/{id}',[TeamController::class,'destroy'])->name('team.destroy');
//show user dashboard
Route::get('/user_dashboard',[PageController::class,'user_dashboard']);
//show result to user
Route::get('/userresults/{id}',[PageController::class,'user_result']);
//show tournament performance individually to user
Route::get('/performance/{id}',[PageController::class,'tournament_performance']);

//////Search///////
Route::get('/search_name', [PageController::class,'searchByName'])->name('searchByName');
Route::get('/search_type', [PageController::class,'searchByType'])->name('searchByType');
Route::get('/search_game', [PageController::class,'searchByGame'])->name('searchByGame');


////////Ratings/////////////
//show rating page
Route::prefix('/rating')->group(function(){
    Route::get('/{id}',[PageController::class,'ratings'])->name('show-ratings');
    //add rating
    Route::post('/add',[RatingsController::class,'store'])->name('add-ratings');
    Route::delete('/delete/{id}',[RatingsController::class,'destroy'])->name('rating.destroy');
});


////////////////Booking ////////////////////////////////////
//show bookings page
Route::get('/bookings/{id}',[PageController::class,'bookings']);
});

//Accesing Index page
Route::get('/',[PageController::class,'index']);

//////////////User/////////////////
//show tournaments
Route::get('/tournaments',[PageController::class,'show_tournaments']);
//show tournament details
Route::get('/details/{id}',[PageController::class,'tournament_details']);

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

