<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\SekolahApiController;
use App\Models\Jurusan;
use Illuminate\Auth\Events\Login;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/user', [SekolahApiController::class, 'userAktif']);
Route::get('/sekolah', [SekolahApiController::class, 'sekolah']);
Route::get('/jurusan', [SekolahApiController::class, 'jurusan']);
Route::post('/login', [SekolahApiController::class, 'login']);
Route::post('/register',[SekolahApiController::class, 'register']);
