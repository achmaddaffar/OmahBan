<?php

use App\Http\Controllers\BanController;
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
Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::controller(BanController::class)->prefix('ban')->group(function () {
    Route::get('', 'index')->name('ban');
});