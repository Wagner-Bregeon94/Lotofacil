<?php

use App\Http\Controllers\Concursos\ConcursosController;
use App\Http\Controllers\Estatisticas\EstatisticasController;
use App\Http\Controllers\Sorteador\SorteadorController;
use App\Http\Controllers\Apostas\ApostasController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController; 
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('index');
});

Route::get('/concursos', [
    ConcursosController::class, 'concursos'
])->name('concursos.concursos');

Route::get('/estatisticas', [
    EstatisticasController::class, 'estatisticas'
])->name('estatisticas.estatisticas');

Route::get('/sorteador', [
    SorteadorController::class, 'sorteador'
])->name('sorteador.sorteador');

Route::get('/apostas', [
    ApostasController::class, 'apostas'
])->name('apostas.apostas');

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


Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


