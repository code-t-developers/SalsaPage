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

use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    $salsas = DB::table('salsas')->where('status','A')->get();
    $recetaMes = DB::table('salsas')->where('status','A')->where('recetaMes','A')->first();
    $sliders = DB::table('sliders')->where('status','A')->get();
    return view('layouts.home')->with('salsas',$salsas)->with('recetaMes',$recetaMes)->with('sliders', $sliders);
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

Route::get('/admin', function(){
    return view('admin.dashboard');
})->name('admin');

Route::get('/admin/sliders', 'SliderController@index');

Route::get('/admin/slider/create', 'SliderController@create');

Route::post('/admin/slider/store', 'SliderController@store');

Route::resource('slider', 'SliderController');

Route::resource('salsas', 'SalsasController');

Route::get('/admin/salsas', 'SalsasController@index');

Route::get('/admin/salsas/create', 'SalsasController@create');

Route::post('/admin/salsas/update/{id}', 'SalsasController@update');
