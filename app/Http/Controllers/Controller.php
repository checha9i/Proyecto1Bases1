<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use Session;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function login(Request $req)
     {
      $username = $req->input('form-username');
      $password = $req->input('form-password');
      
      $checkLogin = DB::select('select * from usuario where nombre = :id and contrasenia = :contra ', [ 'id' => $username, 'contra' => $password]);
      
      $tipoUsuario= $checkLogin[0]->tipo_puesto_id_puesto;

      if ( $checkLogin>0) {


	      if ($tipoUsuario==1) {
	      					
	      	return redirect('/Admin');

	      }else if ($tipoUsuario==2) {

      // AQUÍ VA EL OPERARIOR


	      }else if ($tipoUsuario==3) {

	      }else {
      // AQUÍ VA EL CLIENTE

	      }

  }
       echo $tipoUsuario;

  }

  public function registrar(Request $req)
     {
      $username = $req->input('first_name');
      $lasname= $req->input('last_name');
      $password = $req->input('password');
      $email= $req->input('email');
      $Salario= $req->input('Salario');
      $pass1= $req->input('password_confirmation');

    if ($password==$pass1){

	 DB::table('usuario')->insert(['nombre'=>$username,'Apellido'=>$lasname,'contrasenia'=>$password,'email'=>$email,
	      	'tipo_puesto_id_puesto'=>3]);
	     

	     return redirect('/Login');

    }else {

    	 return redirect('/ERROR');
    }

  }

 public function registrarop(Request $req)
     {
     	  $username = $req->input('first_name');
	      $lasname= $req->input('last_name');
	      $password = $req->input('password');
	      $email= $req->input('email');
	      $Salario= $req->input('Salario');
	      $pass1= $req->input('password_confirmation');

	        if ($password==$pass1){ 

	      	 DB::table('usuario')->insert(['nombre'=>$username,'Apellido'=>$lasname,'contrasenia'=>$password,'email'=>$email,'salario'=>$Salario,
	      	      	'tipo_puesto_id_puesto'=>2]);
	      	     
	      	     return redirect('/Login');

	          }else {

	          	 return redirect('/ERROR');
	          }


     }
  
public function eliminarOperadores(Request $req)
     {
     	     	 
     	$user4=DB::select('select * from usuario');


		return view('Auth/Eop',compact('user4'));
     	
   	 }

 public function destroy($id) {
      DB::delete('delete from usuario where id_usu = ?',[$id]) ;

      echo "Record deleted successfully.<br/>";
      echo '<a href="/Admin">Click Here</a> to go back.';
   }


 public function edit( Request $req,$id=null) {

 	$editar = DB::table('usuario')-> where (['id_usu'=>$id])->get();

 	$editar->nombre = $req->input('name');
 	

 	if ($editar->nombre != null)
 	{
 		echo 'update';
 		
 	}
 	else
 	{
 		return View('Auth/EditarUsuario')->with('user', $editar);
 	}


 }




  public function Opciones(Request $req)
  	{
  		$Opcion = array();
  		for ($i = 0; $i < Session::get('Opciones'); $i++)
  		{
  			$Opcion[$i] = $req->input('opcion'.$i);
  		}
  		if ($Opcion[0] != null)
  		{
  			for ($i = 0; $i < Session::get('Opciones'); $i++)
  			{
  				$data = array('Pregunta'=>Session::get('Pregunta'), 'Tipo'=>Session::get('TipoPregunta'), 'Evaluacion'=>Session::get('NivelPregunta'), 'Respuesta'=>$Opcion[$i]);
  				DB::table('TempEvaluacion')->insert($data);
  			}
  			return view('IndexABC');
  		}
  		else
  		{
  			return view('/Opciones');
  		}
  	}



}
