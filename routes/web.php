<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\VagaController;
use App\Http\Controllers\CandidatoController;

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

// Route::resource('usuarios', 'UserController')->names('user')->parameters(['usuarios' => 'user']);
Route::resource('vagas', 'VagaController')->names('vaga');
Route::resource('candidatos', 'CandidatoController')->names('candidato');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
