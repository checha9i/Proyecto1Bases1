<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function login(Request $req)
     {
      $username = $req->input('form-username');
      $password = $req->input('form-password');

      $checkLogin = DB::table('usuario')->where(['nombre'=>$username,'contrasenia'=>$password])->get();
      if(count($checkLogin)  >0)
      {
       echo "Login SuccessFull<br/>";
      }
      else
      {
       return redirect('/ERROR1');
      }
  }

  public function registrar(Request $req)
     {
      $username = $req->input('first_name');
      $lasname= $req->input('last_name');
      $password = $req->input('password');
      $email= $req->input('email');
      $pass1= $req->input('password_confirmation');

    if ($password==$pass1){

	 DB::table('usuario')->insert(['nombre'=>$username,'Apellido'=>$lasname,'contrasenia'=>$password,'email'=>$email,
	      	'tipo_puesto_id_puesto'=>2]);

	     return redirect('/Login');

    }else {

    	 return redirect('/ERROR');
    }

  }

  public function CrearFormulario(Request $req)
     {
      $id_examen = $req->input('NForm');
      $fecha= $req->input('');
      $duracion = $req->input('Duracion');
      $tipo_evaluacion= $req->input('email');

	 DB::table('usuario')->insert(['nombre'=>$username,'Apellido'=>$lasname,'contrasenia'=>$password,'email'=>$email,
	      	'tipo_puesto_id_puesto'=>2]);

DB:table('select * from formulario')
	     return redirect('/Login');


  }




}
