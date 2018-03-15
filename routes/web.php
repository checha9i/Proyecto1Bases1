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

Route::get('/Admin', function (){

  return view('Auth/Admin');
});
Route::get('/CrearOperador', function (){

  return view('Auth/CrearOperador');
});




Route::get('/ERROR', function (){

  return view('Auth/Error');
});

Route::get('/ERROR1', function (){

  return view('Auth/ErrorLo');
});


Route::get('/Register', function () {
    return view('Auth/Register');
});

Route::get('/Eliop', function () { return view('Auth/Eli');});

Route::post('/EliminarOp','Controller@eliminarOperadores');

Route::get('delete/{id}','Controller@destroy') ;
Route::get('editar/{id}','Controller@edit') ;

Route::get('deleteF/{id}','Controller@destroyF') ;

Route::post('/EliminarFormulario','Controller@EliminarFormulario');



Route::get('/QForm', function () {
    return view('Questions/QuestionForm');
});
Route::post('/loginme','Controller@login');

Route::post('/CrearForm', function () {
    return view('Questions/CrearFormulario');
});

Route::post('/CrearFormulario','Controller@CrearFormulario');

  Route::get('/FVForm', function () {
    return view('Questions/FVForm');
});
Route::get('/AgregarPregunta','Controller@AgregarPregunta');
Route::post('/PrimeraPregunta','Controller@AgregarPrimeraPregunta');

Route::post('/regisme','Controller@registrar');
Route::post('/regisop','Controller@registrarop');



Route::get('/Validate', function () {
    return view('Questions/ValidarPregunta');
});

Route::get('/Create', function () {
    return view('Questions/CrearPregunta');
});

Route::get('/Operador', function () {
    return view('Questions/Operador');
});

Route::get('/GuardarPreguntaDina','Controller@GuardarPreguntaDina');
