<?php

use App\Http\Controllers\AlunosController;
use App\Http\Controllers\MateriasController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/listarMaterias', [MateriasController::class, "listarMaterias"])
    ->name('listarMaterias');
Route::get('/listarAlunos', [AlunosController::class, "listarAlunos"])
    ->name('listarAlunos');
Route::get('/deletarMateria', [MateriasController::class, "deletarMateria"])
    ->name('deletarMateria');
Route::get('/formularioMateria', [MateriasController::class, "formularioMateria"])
    ->name('formularioMateria');
Route::post('/editarMateria', [MateriasController::class, "editarMateria"])
    ->name('editarMateria');
Route::get('/formularioEditarMateria', [MateriasController::class, "formularioEditarMateria"])
    ->name('formularioEditarMateria');

Route::post('/criarMateria', [MateriasController::class, "criarMateria"])
    ->name('criarMateria');

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
