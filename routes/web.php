<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WeaponController;


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
});
Route::get('/layout', function () {
    return view('layout');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

//Route::get('/login', [UserController::class, 'create'])->name('create');

Route::get('/registration', function () {
    return view('registration');
});
Route::get('/main', function () {
    return view('mainpage');
})->name('mainpage');
Route::get('main/members/', function () {
    return view('members');
})-> name('members');
Route::get('main/weapons/', function () {
    return view('weapons');
})->name('weapons');

Route::get('usersMenu', function () {
    return view('usersMenu');
})->name('usersMenu');

Route::get('usersMenu/playersPanel', function () {
    return view('playersPanel');
})->name('playersPanel');

Route::get('usersMenu/weaponsPanel', [WeaponController::class, 'index'])->name('index');



Route::post('/usersMenu', [UserController::class, 'login'])->name('login');
Route::get('/login', function () {
    return view('login');
});

Route::delete('usersMenu/weaponsPanel/{weapon}',[WeaponController::class, 'destroy']);
Route::post('usersMenu/weaponsPanel', [WeaponController::class, 'store'])->name('weaponsPanel');
//Route::get('/weapons/creata', [WeaponController::class, 'create'])->name('weaponsPanel');

//Route::post('/weapons', 'WeaponController@store')->name('weapons.store');

