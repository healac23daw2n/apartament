<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controladorclient;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservaControler;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('trebs', Controladorclient::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/inicio', [AdminController::class, 'index'])->name('administrador.index');

//routes Reserva
Route::get('/reservas', [ReservaControler::class, 'index'])->name('administrador.index');

require __DIR__.'/auth.php';
