<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FranciscoController;
use App\Http\Controllers\AntonioController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('francisco', [FranciscoController::class]);
Route::resource('antonio', [AntonioController::class]);
