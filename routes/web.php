<?php

use App\Http\Controllers\GeneralController;
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



Route::middleware(['auth'])->group(function () {
    Route::get("/terms", [GeneralController::class, "terms"])->name("terms");
    Route::get("/dashboard", [GeneralController::class, "dashboard"])->name('dashboard');
    Route::get('/user', [GeneralController::class, 'userIndex'])->name('user-index');
    Route::post('/user', [GeneralController::class, 'userUpdate'])->name('user-update');
});

Route::get("/", [GeneralController::class, "home"])->name("login");
Route::post('/login', [GeneralController::class, "login"])->name('home.login');
Route::get('/logout', [GeneralController::class, 'logout'])->name('logout');

Route::get('/register', [GeneralController::class, 'registerIndex'])->name('register-index');
Route::post('/register', [GeneralController::class, 'registerUser'])->name('register-user');
