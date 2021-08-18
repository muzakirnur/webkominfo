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
use SebastianBergmann\Environment\Runtime;

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

Route::get('/forgot-password', function () {
    return view('forgot', [
        "page" => "forgot"
    ]);
});

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login']);

Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register', [RegisterController::class, 'store']);

Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::middleware(['admin'])->group(function () {
        Route::get('admin/dashboard', function () {
            return view('layouts.admin.dashboard', [
                "page" => "Dashboard"
            ]);
        });
        Route::resource('permohonan', PermohonanController::class);
        Route::resource('daftaruser', DaftarUserController::class);
        //Route::get('admin/permohonan', [PermohonanController::class, 'index'])->name('index');
        //Route::get('admin/permohonan/edit/{id}', [PermohonanController::class, 'edit'])->name('edit');
        //Route::post('admin/permohonan/update/{id}', [PermohonanController::class, 'update']);
    });

    Route::middleware(['user'])->group(function () {
        Route::get('user/dashboard', function () {
            return view('layouts.user.dashboard', [
                "page" => "Dashboard User"
            ]);
        });
    });

    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
});
