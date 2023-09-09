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

Auth::routes();

/*RUTA QUE ME PERMITE TRABAJAR POR EL MÉTODO GET, ESTE LO UTILIZO PARA RECUPERAR INFORMACIÓN*/ 
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'show'])->name('profile');

/*RUTA QUE ME PERMITE TRABAJAR POR EL MÉTODO POST, ESTE LO UTILIZO PARA CREAR EL PERFIL*/ 
Route::post('/profile', [App\Http\Controllers\Createprofile::class, 'saveDates'])->name('createProfile');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
