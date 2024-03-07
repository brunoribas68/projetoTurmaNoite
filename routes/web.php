<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunosController;

Route::get('/', function () {
});

Route::get('/listarAlunos', [AlunosController::class, 'getAlunos']);

