<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageContoller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/',[LandingPageContoller::class, 'index']);



/** Register Route */
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

/** END Route */

/** Login Route */
Route::get('/login', [LoginController::class, 'index'])->middleware('sessionfilter')->name('login');
Route::post('/login', [LoginController::class, 'postlogin']);
/** END ROUTE */

/** DASHBOARD Route */

Route::group(['middleware'=>['auth']], function(){
    Route::get('/user/dashboard', [DashboardController::class, 'index']);
    Route::get('/user/dashboard/add-data', [DashboardController::class, 'viewadddata']);
    Route::post('/user/dashboard/add-data', [DashboardController::class, 'postadddata']);
    Route::get('/user/dashboard/delete/{id}', [DashboardController::class, 'delete']);
    Route::get('/user/dashboard/profile/{id}', [DashboardController::class, 'vieweditprofile']);
    Route::get('/user/dashboard/cetak-data', [DashboardController::class, 'cetakdata']);
    Route::post('/user/dashboard/profile/{id}', [DashboardController::class, 'posteditprofile']);
    Route::get('/user/logout', [DashboardController::class, 'logout']);
    
});