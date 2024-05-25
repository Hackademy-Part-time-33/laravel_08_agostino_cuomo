<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerPrincipale;

Route::get('/home', [ControllerPrincipale::class, "home"])->name('home');

Route::get('/form', [ControllerPrincipale::class, "form"])->name('form');

Route::get('/lista', [ControllerPrincipale::class, "lista"])->name('lista');

Route::post('save', [ControllerPrincipale::class,'store'])->name('save');