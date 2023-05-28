<?php

use App\Http\Controllers\BanController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\strukController;
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
    return redirect('/dashboard');
});
Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::controller(BanController::class)->prefix('ban')->group(function () {
    Route::get('', 'index')->name('ban');
    Route::get('tambah', 'tambah')->name('ban.tambah');
    Route::post('tambah', 'simpan')->name('ban.tambah.simpan');
    Route::get('edit/{id}', 'edit')->name('ban.edit');
    Route::post('edit/{id}', 'update')->name('ban.tambah.update');
    Route::get('hapus/{id}', 'hapus')->name('ban.hapus');
});
Route::controller(PembeliController::class)->prefix('pembeli')->group(function () {
    Route::get('', 'index')->name('pembeli');
    Route::get('tambah', 'tambah')->name('pembeli.tambah');
    Route::post('tambah', 'simpan')->name('pembeli.tambah.simpan');
    Route::get('edit/{id}', 'edit')->name('pembeli.edit');
    Route::post('edit/{id}', 'update')->name('pembeli.tambah.update');
    Route::get('hapus/{id}', 'hapus')->name('pembeli.hapus');
});
Route::controller(StrukController::class)->prefix('struk')->group(function () {
    Route::get('', 'index')->name('struk');
    Route::get('tambah', 'tambah')->name('struk.tambah');
    Route::post('tambah', 'simpan')->name('struk.tambah.simpan');
    Route::get('edit/{id}', 'edit')->name('struk.edit');
    Route::post('edit/{id}', 'update')->name('struk.tambah.update');
    Route::get('hapus/{id}', 'hapus')->name('struk.hapus');
});