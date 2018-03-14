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
