<?php

use App\Http\Controllers\BanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MekanikController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\strukController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware(['guest'])->group(function () {
    Route::get('/', [UserController::class, 'login'])->name('login');
    Route::controller(UserController::class)->prefix('user')->group(function () {
        Route::get('register', 'register')->name('user.register');
        Route::post('register', 'registerAction')->name('pages.register.action');
        Route::get('login', 'login')->name('user.login');
        Route::post('login', 'loginAction')->name('pages.login.action');
    });
});

Route::middleware(['auth'])->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('/user/logout', 'logout')->name('user.logout');
        Route::get('dashboard', function () {
            return view('pages.dashboard');
        })->name('pages.dashboard');
    });
    Route::controller(BanController::class)->prefix('ban')->group(function () {
        Route::get('', 'index')->name('ban');
        Route::get('tambah', 'tambah')->name('pages.ban.tambah');
        Route::post('tambah', 'simpan')->name('pages.ban.tambah.simpan');
        Route::get('edit/{id}', 'edit')->name('pages.ban.edit');
        Route::post('edit/{id}', 'update')->name('pages.ban.tambah.update');
        Route::get('hapus/{id}', 'hapus')->name('pages.ban.hapus');
    });
    Route::controller(MekanikController::class)->prefix('mekanik')->group(function () {
        Route::get('', 'index')->name('mekanik');
        Route::get('tambah', 'tambah')->name('pages.mekanik.tambah');
        Route::post('tambah', 'simpan')->name('pages.mekanik.tambah.simpan');
        Route::get('edit/{id}', 'edit')->name('pages.mekanik.edit');
        Route::post('edit/{id}', 'update')->name('pages.mekanik.tambah.update');
        Route::get('hapus/{id}', 'hapus')->name('pages.mekanik.hapus');
    });
    Route::controller(PembeliController::class)->prefix('pembeli')->group(function () {
        Route::get('', 'index')->name('pembeli');
        Route::get('tambah', 'tambah')->name('pages.pembeli.tambah');
        Route::post('tambah', 'simpan')->name('pages.pembeli.tambah.simpan');
        Route::get('edit/{id}', 'edit')->name('pages.pembeli.edit');
        Route::post('edit/{id}', 'update')->name('pages.pembeli.tambah.update');
        Route::get('hapus/{id}', 'hapus')->name('pages.pembeli.hapus');
    });
    Route::controller(StrukController::class)->prefix('struk')->group(function () {
        Route::get('', 'index')->name('struk');
        Route::get('tambah', 'tambah')->name('pages.struk.tambah');
        Route::post('tambah', 'simpan')->name('pages.struk.tambah.simpan');
        Route::get('edit/{id}', 'edit')->name('pages.struk.edit');
        Route::post('edit/{id}', 'update')->name('pages.struk.tambah.update');
        Route::get('hapus/{id}', 'hapus')->name('pages.struk.hapus');
    });
    Route::controller(TransaksiController::class)->prefix('transaksi')->group(function () {
        Route::get('', 'index')->name('transaksi');
        Route::get('tambah/', 'tambah')->name('pages.transaksi.tambah');
        Route::post('tambah_struk/', 'tambah')->name('pages.transaksi.tambah');
        Route::post('tambah/', 'simpan')->name('pages.transaksi.tambah.simpan');
        Route::get('edit/{id}', 'edit')->name('pages.transaksi.edit');
        Route::post('edit/{id}', 'update')->name('pages.transaksi.tambah.update');
        Route::get('hapus/{id}', 'hapus')->name('pages.transaksi.hapus');
        Route::get('pickstruk', 'pickstruk')->name('pages.transaksi.pickstruk');
    });
});