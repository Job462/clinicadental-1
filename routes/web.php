<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\RegistroControl;
use App\Http\Controllers\SesionControl;

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

Route::view('/', 'welcome');

Route::get('/', function () {
    return view('home');
});
Route::get('/auth/login', [SesionControl::class, 'create']) ->name('login.index');

Route::get('/auth/register', [RegistroControl::class, 'create']) ->name('register.index');

Route::post('/register', [RegistroControl::class, 'store']) ->name('register.store');

Route::resource('/reservas',ReservaController::class);
Route::resource('/clientes',ClienteController::class);
Route::resource('/horarios',HorarioController::class);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
