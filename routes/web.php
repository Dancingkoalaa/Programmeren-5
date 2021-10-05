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
use App\Http\Controllers\RegistreerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', [AboutController::class, 'index']);

Route::get('/login', [LoginController::class, 'login']);

Route::get('/characters', [CharacterController::class, 'index']);

Route::get('/registreer', [RegistreerController::class, 'registreer']);

Route::get('characters/{id}', [CharacterController::class, 'showID']);
Route::get('delete/{id}', [CharacterController::class, 'deleteID']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
