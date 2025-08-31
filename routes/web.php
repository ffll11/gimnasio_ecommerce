<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

/* Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/management', [\App\Http\Controllers\Management\ManagementController::class, 'index'])
        ->name('management.index');
}); */

Route::get('/management', [\App\Http\Controllers\Management\ManagementController::class, 'index'])

    ->name('management.index');

Route::get('/management/asistencia', [\App\Http\Controllers\Management\AsistenciaController::class, 'index'])
    ->name('management.asistencia.index');

Route::get('/management/clase', [\App\Http\Controllers\Management\ClaseController::class, 'index'])
    ->name('management.clase.index');

Route::get('/management/membresia', [\App\Http\Controllers\Management\MembresiaController::class, 'index'])
    ->name('management.membresia.index');

Route::get('/management/pago', [\App\Http\Controllers\Management\PagoController::class, 'index'])
    ->name('management.pago.index');

Route::get('/management/reporte', [\App\Http\Controllers\Management\ReporteController::class, 'index'])
    ->name('management.reporte.index');

Route::get('/management/staff', [\App\Http\Controllers\Management\StaffController::class, 'index'])
    ->name('management.staff.index');

Route::get('/management/usuario', [\App\Http\Controllers\Management\UsuarioController::class, 'index'])
    ->name('management.usuario.index');
