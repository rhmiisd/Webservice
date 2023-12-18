<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\SekolahController;
use App\Models\Jurusan;
use App\Models\Sekolah;

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
    return redirect()->route('login');
});

//route jurusans
Auth::routes();
Route::get('/jurusans', [JurusanController::class, 'index'])->name('jurusans.index');
Route::get('/jurusans/create', [JurusanController::class, 'create'])->name('jurusans.create');
Route::post('/jurusans/store', [JurusanController::class, 'store'])->name('jurusans.store');
Route::patch('/jurusans/{id}', [JurusanController::class, 'update'])->name('jurusans.update');
Route::get('jurusans/show/{id}', [JurusanController::class, 'show'])->name('jurusans.show');
Route::delete('/jurusans/{id}', [JurusanController::class, 'destroy'])->name('jurusans.destroy');
Route::get('/jurusans/{id}', [JurusanController::class, 'edit'])->name('jurusans.edit');

//route sekolah
Auth::routes();
Route::get('/sekolahs', [SekolahController::class, 'index'])->name('sekolahs.index');
Route::get('/sekolahs/create', [SekolahController::class, 'create'])->name('sekolahs.create');
Route::post('/sekolahs/store', [SekolahController::class, 'store'])->name('sekolahs.store');
Route::patch('/sekolah/edit/{id}', [SekolahController::class, 'update'])->name('sekolahs.update');
Route::delete('/sekolahs/{id}', [SekolahController::class, 'destroy'])->name('sekolahs.destroy');
Route::get('/sekolahs/show/{id}', [SekolahController::class, 'show'])->name('sekolahs.show');
Route::get('/sekolah/edit/{id}', [SekolahController::class, 'edit'])->name('sekolahs.edit');

Auth::routes();

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');


