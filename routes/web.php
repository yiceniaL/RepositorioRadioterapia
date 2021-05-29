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
    return view('tratamientos');
});

Route::get('/casos', function () {
    return view('casos');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/formularioCaso', function () {
    return view('formularioCaso');
});

Route::get('/formularioPropuesta', function () {
    return view('formularioPropuesta');
});

Route::get('/formularioDetalle', function () {
    return view('formularioDetalle');
});

Route::get('/confirmacion', function () {
    return view('confirmacion');
});

Route::get('/prueba', function () {
    return view('prueba');
});


