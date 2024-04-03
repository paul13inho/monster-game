<?php

use App\Http\Controllers\GeneralController;
use App\Http\Controllers\MonsterController;
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
    Route::get('/master', [GeneralController::class, 'masterIndex'])->name('master-index');
    Route::get('/user', [GeneralController::class, 'userIndex'])->name('user-index');
    Route::post('/user', [GeneralController::class, 'userUpdate'])->name('user-update');
    Route::get('/create-monster', [MonsterController::class, 'monsterIndex'])->name('create-monster-index');
    Route::get('/create-type', [MonsterController::class, 'typeIndex'])->name('create-type-index');

    Route::get('/create-move', [MonsterController::class, 'moveIndex'])->name('create-move-index');
    Route::post('/create-move', [MonsterController::class, 'moveCreate'])->name('monster.move-create');
    Route::get('/get-moves', [MonsterController::class, 'getMoves'])->name('get-moves');
});

Route::get("/", [GeneralController::class, "home"])->name("login");
Route::post('/login', [GeneralController::class, "login"])->name('home.login');
Route::get('/logout', [GeneralController::class, 'logout'])->name('logout');

Route::get('/register', [GeneralController::class, 'registerIndex'])->name('register-index');
Route::post('/register', [GeneralController::class, 'registerUser'])->name('register-user');
