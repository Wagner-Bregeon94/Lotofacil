<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Concursos\ConcursosController;
use App\Http\Controllers\Estatisticas\EstatisticasController;
use App\Http\Controllers\Sorteador\SorteadorController;
use App\Http\Controllers\Apostas\ApostasController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Profiles\ShowController; 

Route::get('/', [
    IndexController::class, 'index'
])->name('index');

Route::get('/concursos', [
    ConcursosController::class, 'concursos'
])->name('concursos');

Route::get('/estatisticas', [
    EstatisticasController::class, 'estatisticas'
])->name('estatisticas');

Route::get('/sorteador', [
    SorteadorController::class, 'sorteador'
])->name('sorteador');

Route::get('/apostas', [
    ApostasController::class, 'apostas'
])->name('apostas');

Route::post('/apostas/salvar', [
    ApostasController::class, 'salvarAposta'
])->name('apostas.salvar');

Route::get('/register', [
    RegisterController::class, 'showRegistrationForm'
])->name('register');

Route::post('/register', [
    RegisterController::class, 'register'
])->name('auth.register');

Route::post('/authenticate', [
    LoginController::class, 'authenticate'
])->name('auth.authenticate');

Route::get('/login', [
    LoginController::class, 'login'
])->name('login');

Route::post('/logout', [
    LogoutController::class, 'logout'
])->name('logout');

Route::get('/show', [
    ShowController::class, 'show'
])->name('show');

Route::get('/show/edit', [
    ShowController::class, 'edit'
])->name('show.edit');