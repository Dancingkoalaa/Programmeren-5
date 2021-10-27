<?php
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

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistreerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', [AboutController::class, 'index']);

Route::get('/login', [LoginController::class, 'login']);

Route::get('/characters', [CharacterController::class, 'index']);
Route::get('/changeStatus', [CharacterController::class, 'changeCharacterStatus']);

Route::get('/registreer', [RegistreerController::class, 'registreer']);

Route::get('characters/{id}', [CharacterController::class, 'showID']);
Route::get('add-character', [CharacterController::class, 'create'])->middleware('auth');
Route::post('add-character', [CharacterController::class, 'store'])->middleware('auth');

Route::get('edit-character/{character}', [CharacterController::class, 'edit']);
Route::post('/store-edit/{character}', [CharacterController::class, 'update'])->name('store-edit');

Route::get('user-profile', [ProfileController::class, 'edit'])->middleware('auth');
Route::post('/store-profile/{user}', [ProfileController::class, 'update'])->name('store-profile')->middleware('auth');

Route::get('delete/{id}', [CharacterController::class, 'deleteID']);

Route::get('/favourite/{character}', [CharacterController::class, 'storeFavourite'])->name('character.favourite');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/MyCharacters', [\App\Http\Controllers\MyCharactersController::class, 'index']);
