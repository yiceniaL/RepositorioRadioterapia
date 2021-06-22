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

Route::get('/tratamientos', function () {
    return view('3_tratamientos');
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

Route::get('/formularioTratamiento', function () {
    return view('5_formularioTratamiento');
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

Route::get('/vistaDetalleTratamiento', function () {
    return view('9_vistaDetalleTratamiento');
});

Route::get('/mantenedores', function () {
    return view('10_mantenedores');
});

Route::get('/prueba', function () {
    return view('prueba');
});


