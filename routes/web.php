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

Route::get('/', [\App\Http\Controllers\PageController::class, 'welcome']);

// rutas bajo autorización

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // ruta dasboard
    Route::get('/dashboard',  [\App\Http\Controllers\PageController::class, 'dasboard'])->name('dashboard');
    // ruta cliente
    Route::get('/cliente/', [App\Http\Controllers\ClienteController::class, 'index'])->name('cliente.index');
    Route::put('/cliente/editar', [App\Http\Controllers\ClienteController::class, 'edit'])->name('cliente.update');
    Route::delete('/cliente/eliminar', [App\Http\Controllers\ClienteController::class, 'delete'])->name('cliente.destroy');
    Route::post('/cliente/nuevo', [App\Http\Controllers\ClienteController::class, 'new'])->name('cliente.store');
});
// rutas para houses
Route::resource('house', App\Http\Controllers\HouseController::class);
