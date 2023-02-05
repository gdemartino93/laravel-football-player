<?php

use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class,'home'])
        -> name('player.home');
Route::get('/player/single/{id}', [MainController::class,'player'])
        -> name('player.single');
Route::get('/player/delete/{id}', [MainController::class,'deletePlayer'])
        ->name('player.delete');