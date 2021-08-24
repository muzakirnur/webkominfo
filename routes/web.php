<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PermohonanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Models\Permohonan;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DaftarUserController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermohonanSelesaiControler;
use App\Http\Controllers\IndexPermohonanController;
use App\Http\Controllers\LayarUserController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\PermohonanUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ForgotPasswordController;

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
    return view('index', [
        "page" => "Home"
    ]);
});

Route::get('/register', function () {
    return view('register', [
        "page" => "Daftar"
    ]);
});

Route::get('/faq', function () {
    return view('faq', [
        "page" => "faq"
    ]);
});

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login']);

Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register', [RegisterController::class, 'store']);

Route::group(['middleware' => 'auth'], function () {

    Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::middleware(['admin'])->group(function () {
        // Route::get('admin/dashboard', function () {
        //     return view('layouts.admin.dashboard', [
        //         "page" => "Dashboard"
        //     ]);
        // });
        Route::get('admin/dashboard', [AdminController::class, 'index'])->name('index');
        Route::get('admin/permohonan/masuk', [PermohonanController::class, 'masuk'])->name('masuk');
        Route::get('admin/permohonan/diterima', [PermohonanController::class, 'diterima'])->name('diterima');
        Route::get('admin/permohonan/ditolak', [PermohonanController::class, 'ditolak'])->name('ditolak');
        Route::get('admin/permohonan/diproses', [PermohonanController::class, 'diproses'])->name('diproses');
        Route::get('admin/permohonan/selesai', [PermohonanController::class, 'selesai'])->name('selesai');
        Route::resource('admin/permohonan', PermohonanController::class);
        Route::resource('admin/daftaruser', DaftarUserController::class);
        Route::resource('profile', ProfileController::class);
        Route::resource('password', PasswordController::class);
    });

    Route::middleware(['user'])->group(function () {
        Route::get('user/dashboard', function () {
            return view('layouts.user.dashboard', [
                "page" => "Dashboard User"
            ]);
        });
        //Route::get('user/permohonan', [PermohonanController::class, 'awal'])->name('awal');
        //Route::get('user/akun', [DaftarUserController::class, 'akun'])->name('akun');
        //Route::get('user/tambah', [PermohonanController::class, 'create'])->name('create');
        //Route::post('user/tambah', [PermohonanController::class, 'store']);
        //Route::get('user/edituser', [DaftarUserController::class, 'tampil'])->name('tampil');
        //Route::post('user/edituser', [DaftarUserController::class, 'uedit']);
        Route::resource('user', UserController::class);
        Route::resource('layaruser', LayarUserController::class);
        Route::resource('permohonanuser', PermohonanUserController::class);
        Route::resource('indexpermohonan', IndexPermohonanController::class);
        Route::resource('permohonanselesai', PermohonanSelesaiControler::class);
    });

    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
});
