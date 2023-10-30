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
use App\Http\Controllers\Profiles\DeleteController;
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
])->name('apostas')->middleware('auth');

Route::post('/apostas/salvar', [
    ApostasController::class, 'salvarAposta'
])->name('apostas.salvar')->middleware('auth');

Route::delete('/apostas/delete',[
    ApostasController::class, 'deleteSelected'
])->name('apostas.delete')->middleware('auth');

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
])->name('profile.show')->middleware('auth');

Route::get('/profile/edit', [
    ShowController::class, 'showEditForm'
])->name('profile.edit')->middleware('auth');

Route::post('/profile/edit', [
    ShowController::class, 'processEditForm'
]);

Route::get('/change/password', [
    ShowController::class, 'showChangePassword'
])->name('change.password')->middleware('auth');

Route::post('/change/password', [
    ShowController::class, 'changePassword'
])->name('change.password.submit');

Route::get('/delete/account', [
    DeleteController::class, 'deleteAccount'
])->name('delete.account')->middleware('auth');

Route::delete('/profile/delete/{id}', [
    DeleteController::class, 'destroy'
])->name('profile.delete')->middleware('auth');