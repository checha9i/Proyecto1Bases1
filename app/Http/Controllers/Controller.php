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

  public function CrearFormulario(Request $req)
     {
       $date = new \DateTime();
      $NombreF = $req->input('NForm');
      if ($NombreF != null)
          {

               DB::table('formulario')->insert(['NombreF'=>$NombreF,'fecha'=>$date]);
               Session::put('NombreFormulario',$NombreF);
                return view('Questions/PrimeraPregunta');
        }else{
             //return redirect('/Operador');
            echo 'hola jeje';
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

     public function EliminarFormulario(Request $req)
          {

          	$Formu=DB::select('select * from formulario');


     		return view('Questions/BorrarFormulario',compact('Formu'));

        	 }

 public function destroy($id) {


      DB::delete('delete from usuario where id_usu = ?',[$id]) ;

      echo "Record deleted successfully.<br/>";
      echo '<a href="/Admin">Click Here</a> to go back.';
   }




 public function destroyF($id) {
      DB::delete('delete * from pregunta where id_examen = ?',[$id]) ;
      DB::delete('delete from formulario where id_examen = ?',[$id]) ;

      echo "Record deleted successfully.<br/>";
      echo '<a href="/Operador">Click Here</a> to go back.';
   }


 public function edit( Request $req,$id=null) {

  $editar = DB::table('usuario')-> where (['id_usu'=>$id])->get();

  $editar->nombre = $req->input('name');

  if ($editar->nombre != null)
  {
    echo 'update';
    // return redirect('/EliminarOp');
  }
  else
  {
    return View('Auth/EditarUsuario')->with('user', $editar);
  }


 }



  public function AgregarPregunta(Request $req)
  {
		$SelectTipoPregunta = $req->input('SelectTipoPregunta');
		if ($SelectTipoPregunta != null)
		{

			if ($SelectTipoPregunta == 'Directa')
			{
				Session::put('Reporte', 'r1');
				return view('Questions/CrearPregunta');
			}
			elseif ($SelectTipoPregunta == 'OpcionMul')
			{
				Session::put('Reporte', 'r2');
				return view('Questions/CrearPregunta');
			}
			elseif ($SelectTipoPregunta == 'VF')
			{
				Session::put('Reporte', 'r3');
				return view('Questions/CrearPregunta');
			}
			elseif ($SelectTipoPregunta == 'Final')
			{
				Session::put('Reporte', 'r4');
				return view('Questions/CrearPregunta');
			}
		}
		else
		{
      echo 'jeje juajsujf uasjfuajsdufasd';
      //Session::put('Reporte', 'r5');
			//return view('Questions/CrearPregunta');
		}
	}



     public function AgregarPrimeraPregunta(Request $req)
        {
           $Formulario=Session::get('NombreFormulario');
             $Pregunta = $req->input('Pregunta');
             $Respuesta = $req->input('Respuesta');

             $Sig_Pregunta=$req->input('Buena');
             $Sig_Pregunta_Mala=$req->input('Mala');
           if ($Pregunta != null||$Respuesta != null||$Sig_Pregunta != null||$Sig_Pregunta_Mala != null)
               {

                DB::table('pregunta')->insert(['pregunta'=>$Pregunta,'respuesta'=>$Respuesta,'TipoPregunta'=>1,'SigPregunta'=>$Sig_Pregunta,'SigPregunta_Mala'=>$Sig_Pregunta_Mala]);
                return view('Questions/CrearPregunta');
                }else{
                   echo 'error';
               }
        }


        public function GuardarPreguntaDina(Request $req) // 1-DIRECTA 2-OPCIONMULTIPLE 3-VERFALSO 4-FINAL
         {
           if (SESSION::GET('Reporte')=='r1')
           {
             DB::table('pregunta')->insert(['pregunta'=>$req->TPregunta,'respuesta'=>$req->TRespuesta,'TipoPregunta'=>1,'SigPregunta'=>$req->TRB,'SigPregunta_Mala'=>$req->TRM]);
                 echo '.|.';

           }
           else if (SESSION::GET('Reporte')=='r2')
           {
             DB::table('pregunta')->insert(['pregunta'=>$req->TPregunta,'respuesta'=>$req->TRespuesta,'TipoPregunta'=>2,'SigPregunta'=>$req->TRB,'SigPregunta_Mala'=>$req->TRM]);
                 echo '.|.';

           }else if (SESSION::GET('Reporte')=='r3'){
             DB::table('pregunta')->insert(['pregunta'=>$req->TPregunta,'respuesta'=>$req->TRespuesta,'TipoPregunta'=>3,'SigPregunta'=>$req->TRB,'SigPregunta_Mala'=>$req->TRM]);
                 echo '.|.';

           }else if (SESSION::GET('Reporte')=='r4'){
             DB::table('pregunta')->insert(['pregunta'=>$req->TPregunta,'respuesta'=>$req->TRespuesta,'TipoPregunta'=>4,'SigPregunta'=>$req->TRB,'SigPregunta_Mala'=>$req->TRM]);
                 echo '.|.';

           }else {

           }


         }

}
