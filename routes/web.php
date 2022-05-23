<?php

use Illuminate\Support\Facades\Route;
use App\Models\Genero;
use App\Models\User;
use App\Models\Artista;
use App\Models\Cancione;
use App\Models\Herramienta;
use App\Models\Estadisticas_cancione;
use App\Models\Estadisticas_artista;
use App\Models\Estadisticas_genero;
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
    return view('welcome');
});

Route::get('/generos', function () {
    return Genero::ALL();
});

Route::get('/artistas', function () {
    return Artista::ALL();
});

Route::get('/canciones', function () {
    return Cancione::ALL();
});

Route::get('/users', function () {
    return User::ALL();
});

Route::get('/herramientas', function () {
    return Herramienta::ALL();
});

Route::get('/estadisticas_canciones', function () {
    return Estadisticas_cancione::ALL();
});

Route::get('/estadisticas_artistas', function () {
    return Estadisticas_artista::ALL();
});

Route::get('/estadisticas_generos', function () {
    return Estadisticas_genero::ALL();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
