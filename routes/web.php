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

Route::post('/Report3', function () {
    return view('APrincipales/Reporte3');
});

Route::post('/Report8', function () {
    return view('APrincipales/Reporte8');
});
Route::get('/END', function (){

  return view('Auth/End');
});


Route::get('/ERROR1', function (){

  return view('Auth/ErrorLo');
});


Route::get('/Register', function () {
    return view('Auth/Register');
});
Route::post('/regisme','Controller@registrar');
Route::get('/Eliop', function () { return view('Auth/Eli');});

Route::post('/EliminarOp','Controller@eliminarOperadores');


Route::get('delete/{id}','Controller@destroy') ;
Route::get('editar/{id}','Controller@edit') ;

Route::get('deleteF/{id}','Controller@destroyF') ;
Route::get('deleteP/{id}','Controller@destroyP') ;

Route::post('/EliminarFormulario','Controller@EliminarFormulario');

Route::post('/Report1','Controller@Reporte1');
Route::post('/Report2','Controller@Reporte2');

Route::post('/Report4','Controller@Reporte4');
Route::post('/Report5','Controller@Reporte5');
Route::post('/Report6','Controller@Reporte6');
Route::post('/Report7','Controller@Reporte7');


Route::get('/Reporte2Formu/{id}','Controller@Reporte2Detalle');

Route::post('/graficar1','Controller@grafica');




Route::post('/EliminarPreguntas','Controller@EliminarPreguntas');

Route::get('/EliminarPregunta/{id}','Controller@EliminarPregunta');

Route::post('/end','Controller@end');

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
Route::get('/UsuarioPrincipal', function () {
    return view('APrincipales/Principal');
});
Route::get('/GuardarPreguntaDina','Controller@GuardarPreguntaDina');
Route::get('/Register','Controller@registrar');
Route::get('/LeerPublicacion/{id}', array( 'as' => 'LeerPublicacion', 'uses' => 'Controller@Leer'));
Route::get('/LeerPublicacion2/{id}', 'Controller@Leer');
