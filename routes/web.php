<?php

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
    return view('welcome');
});

Route::get('/propuestas', function () {
    return view('3_propuestas');
});

Route::get('/casos', function () {
    return view('2_casos');
});

Route::get('/inicio', function () {
    return view('1_inicio');
});

Route::get('/formularioCaso', function () {
    return view('4_formularioCaso');
});

Route::get('/formularioPropuesta', function () {
    return view('5_formularioPropuesta');
});

Route::get('/formularioGlosario', function () {
    return view('6_formularioGlosario');
});

Route::get('/confirmacion', function () {
    return view('7_confirmacion');
});

Route::get('/vistaDetalleCaso', function () {
    return view('8_vistaDetalleCaso');
});

Route::get('/vistaDetallePropuesta', function () {
    return view('9_vistaDetallePropuesta');
});

Route::get('/administrador', function () {
    return view('10_administrador');
});

Route::get('/prueba', function () {
    return view('prueba');
});


