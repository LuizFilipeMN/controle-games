<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/games', [App\Http\Controllers\GamesController::class,'index']);
Route::get('/games/adicionar', [App\Http\Controllers\GamesController::class,'create']);
Route::post('/games/salvar', [App\Http\Controllers\GamesController::class,'store']);
