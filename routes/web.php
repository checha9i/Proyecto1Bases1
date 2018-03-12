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

Route::get('/ERROR', function (){

  return view('Auth/Error');
});

Route::get('/ERROR1', function (){

  return view('Auth/ErrorLo');
});


Route::get('/Register', function () {
    return view('Auth/Register');
});
Route::get('/QForm', function () {
    return view('Questions/QuestionForm');
});


Route::post('/loginme','Controller@login');
Route::post('/regisme','Controller@registrar');


