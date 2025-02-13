<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\Cliente;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        'clientes' => Cliente::all(),
        'usuarios' => User::all()
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/users', [UserController::class, 'index'])->name('user-index');
    Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('user-edit');
    Route::put('/users/update/{id}', [UserController::class, 'update'])->name('user-update');

    Route::resources([
        'cliente' => ClienteController::class
    ]);

    Route::get('meus-clientes/{id}', [ClienteController::class, 'meus_clientes'])->name('meus.clientes');
    Route::get('delete/{id}', [ClienteController::class, 'delete'])->name('cliente.delete');

});

require __DIR__.'/auth.php';
