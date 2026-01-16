<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LegalController;

Route::get('/', IndexController::class)->name('index');

Route::get('politicas de privacidad',[LegalController::class,'policies'])
->name('policies');
Route::get('terminos y condiciones',[LegalController::class,'terms'])
->name('terms');