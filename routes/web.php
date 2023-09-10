<?php

use App\Http\Controllers\SPController;
use App\Http\Controllers\MeetController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [SPController::class, 'index']) -> name('home.index');
Route::post('/play', [SPController::class, 'play']) -> name('home.play');

Route::get('/meet/{city}', [MeetController::class, 'index']) -> name('meet.index');

