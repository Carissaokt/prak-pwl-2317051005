<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MataKuliahController;

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
})->name('welcome');

Route::get('/profile/{nama}/{npm}/{kelas}',[ProfileController::class, 'profile']);
Route::get('user', [UserController::class, 'index']);
Route::get('/user/create', [userController::class,'create'])->name('user.create');
Route::post('/user', [UserController::class, 'store'])->name('user.store');

Route::get('/mk', [MataKuliahController::class, 'index'])->name('mk.index');
Route::get('/mk/create', [MataKuliahController::class, 'create'])->name('mk.create');
Route::post('/mk', [MataKuliahController::class, 'store'])->name('mk.store');