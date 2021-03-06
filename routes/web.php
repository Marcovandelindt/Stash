<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Games\GamesController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Games\ScrapePlaystationDataController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

# Auth Routes
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

# Games routes
Route::get('/games', [GamesController::class, 'index'])->name('games');
Route::get('/games/scrape-psn-data', [ScrapePlaystationDataController::class, 'scrape'])->name('games.scrape');
