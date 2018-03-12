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
    return view('welcome');
});

Route::get('/Login', function (){

  return view('Auth/Login');
});


Route::get('/Register', function () {
    return view('Auth/Register');
});
Route::get('/QForm', function () {
    return view('Questions/QuestionForm');
});
Route::post('/loginme','Controller@login');
Route::get('/FVForm', function () {
    return view('Questions/FVForm');
});

Route::get('/Validate', function () {
    return view('Questions/ValidarPregunta');
});

Route::get('/Create', function () {
    return view('Questions/CrearPregunta');
});
