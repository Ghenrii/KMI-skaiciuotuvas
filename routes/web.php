<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\BMIController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|

./vendor/bin/sail up

Kuno mases indekso skaicuokle ND --------------------------------------------------

*/
Route::get('/', [BMIController::class, 'index'])->name('skaiciuokle');
Route::post('/', [BMIController::class, 'calculate'])->name('result');