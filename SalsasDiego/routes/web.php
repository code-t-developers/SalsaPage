<?php

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
    return view('layouts.home');
})->name('home');

Route::get('/nosotros', function () {
    return view('layouts.nosotros');
})->name('nosotros');

Route::get('/contacto', function () {
    return view('layouts.contacto');
})->name('contacto');

Route::get('/recetas', function () {
    return view('layouts.recetas');
})->name('recetas');


