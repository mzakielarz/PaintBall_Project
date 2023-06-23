<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WeaponController;
use App\Http\Controllers\PlayerController;
use App\Models\Weapon;

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
    return view('index');
})->name('index');

Route::get('login', function () {
    return view('login');
})->name('login');

Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('players', function () {
    return view('players');
})-> name('players');

Route::get('weapons', [WeaponController::class, 'showWeapons'])->name('weapons');
Route::get('players', [PlayerController::class, 'showPlayers'])->name('players');

Route::get('usersMenu', function () {
    return view('usersMenu');
})->name('usersMenu');

Route::post('usersMenu', [UserController::class, 'login'])->name('usersMenu');

Route::get('usersMenu/playersPanel', function () {
    return view('playersPanel');
})->name('playersPanel');

Route::middleware([\App\Http\Middleware\Authorization::class])->group(function () {

Route::get('usersMenu/weaponsPanel', [WeaponController::class, 'weaponController'])->name('weaponsPanel');
Route::get('usersMenu/weaponsPanel/{id}/edit', [WeaponController::class, 'edit'])->name('weaponsEdit');
Route::post('usersMenu/weaponsPanel', [WeaponController::class, 'addWeapon'])->name('addWeapon');
Route::post('usersMenu/weaponsPanel/{id}/restore', [WeaponController::class, 'restore'])->name('weaponRestore');
Route::patch('usersMenu/weaponsPanel/{id}', [WeaponController::class, 'update'])->name('weaponsUpdate');
Route::delete('usersMenu/weaponsPanel/{weapon}',[WeaponController::class, 'destroy'])->name('deleteWeapon');

Route::get('usersMenu/playersPanel', [PlayerController::class, 'playerController'])->name('playersPanel');
Route::get('usersMenu/playersPanel/{id}/edit', [PlayerController::class, 'edit'])->name('playerEdit');
Route::post('usersMenu/playersPanel', [PlayerController::class, 'addPlayer'])->name('addPlayer');
Route::patch('usersMenu/playersPanel/{id}', [PlayerController::class, 'update'])->name('playersUpdate');
Route::delete('usersMenu/playersPanel/{player}', [PlayerController::class, 'destroy'])->name('deletePlayer');
});


