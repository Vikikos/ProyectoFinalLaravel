<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LegalController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EventController;
use App\Http\Middleware\IsAdminMiddleware;

Route::get('/', IndexController::class)
->name('index');

Route::get('politicas de privacidad',[LegalController::class,'policies'])
->name('policies');
Route::get('terminos y condiciones',[LegalController::class,'terms'])
->name('terms');

// Rutas de Session

Route::get('signup', [LoginController::class, 'signupForm'])
->name('signupForm');
Route::post('singup',[LoginController::class, 'signup'])
->name('signup');
Route::get('login',[LoginController::class, 'loginForm'])
->name('loginForm');
Route::post('login', [LoginController::class, 'login'])
->name('login');
Route::get('logout',[LoginController::class, 'logout'])
->name('logout');


//Ruta eventos

Route::resource('events', EventController::class);

Route::get('events/create', [EventController::class, 'create'])
->name('events.create')
->middleware('isAdmin');