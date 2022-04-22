<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
/*
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});*/

Route::get('/cliente/',[App\Http\Controllers\ClienteController::class,'index'])->name('cliente');
Route::put('/cliente/editar',[App\Http\Controllers\ClienteController::class,'edit'])->name('cliente');
Route::delete('/cliente/eliminar',[App\Http\Controllers\ClienteController::class,'delete'])->name('cliente');
Route::post('/cliente/nuevo',[App\Http\Controllers\ClienteController::class,'new'])->name('cliente');

// rutas para houses
Route::resource('house',App\Http\Controllers\HouseController::class);