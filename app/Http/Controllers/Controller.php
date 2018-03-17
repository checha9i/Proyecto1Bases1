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
      $date = new \DateTime();
      Session::put('USU', $req->input('form-username'));

      $checkLogin = DB::select('select * from usuario where nombre = :id and contrasenia = :contra ', [ 'id' => $username, 'contra' => $password]);

      $tipoUsuario= $checkLogin[0]->tipo_puesto_id_puesto;

      if ( $checkLogin>0) {


	      if ($tipoUsuario==1) {
	      		
	      	
            	$NombreF=Session::get('USU');
	      		DB::table('bitacora')->insert(['nombreUsu'=>$NombreF,'fecha'=>$date,'detalle'=>'Ingreso Al sistema']);



	      	    return redirect('/Admin');

	      }else if ($tipoUsuario==2) {
  			return redirect('/Operador');
      // AQUÍ VA EL OPERARIOR


	      }else if ($tipoUsuario==3) {


	      }else {
      // AQUÍ VA EL CLIENTE

	      }

  }
       echo $tipoUsuario;

  }

 public function end(Request $req){

 	Session::put('USU', $req->input(''));

 	return redirect('/END');

 }




  public function CrearFormulario(Request $req)
     {
       $date = new \DateTime();
      $NombreF = $req->input('NForm');
      if ($NombreF != null)
          {
			   Session::put('NumPreg', $req->input('Num'));
               DB::table('formulario')->insert(['NombreF'=>$NombreF,'fecha'=>$date]);
               
			   $Form = DB::select('select * from formulario order by id_examen DESC');
			   Session::put('IdForm', $Form[0]->id_examen);
			   
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
			Session::put('ContadorPre', 1);
            $Formulario=Session::get('NombreFormulario');
             $Pregunta = $req->input('Pregunta');
             $Respuesta = $req->input('Respuesta');

             $Sig_Pregunta=$req->input('Buena');
             $Sig_Pregunta_Mala=$req->input('Mala');
           
		   if ($Sig_Pregunta > Session::get('NumPreg') || $Sig_Pregunta_Mala > Session::get('NumPreg'))
		   {
			   echo 'error se intenta acceder a una pregunta inexistente';
		   }
		   else
		   {
			   if ($Pregunta != null||$Respuesta != null||$Sig_Pregunta != null||$Sig_Pregunta_Mala != null)
               {

                DB::table('pregunta')->insert(['pregunta'=>$Pregunta,'respuesta'=>$Respuesta,'TipoPregunta'=>1,'SigPregunta'=>$Sig_Pregunta,'SigPregunta_Mala'=>$Sig_Pregunta_Mala]);
                
				
				
				$Preg = DB::select('select * from pregunta order by idpregunta DESC');
			    
				DB::table('preguntaformulario')->insert(['numemro'=>Session::get('ContadorPre'),'formulario_id_examen'=>Session::get('IdForm'),'pregunta_idpregunta'=>$Preg[0]->idpregunta]);
                Session::put('ContadorPre', Session::get('ContadorPre') + 1);
				
				
				return view('Questions/CrearPregunta');
                }
				else
				{
                   echo 'error';
               }
		   }
		   
        }


        public function GuardarPreguntaDina(Request $req) // 1-DIRECTA 2-OPCIONMULTIPLE 3-VERFALSO 4-FINAL
         {
			if ($req->input('TRB') > Session::get('NumPreg') || $req->input('TRM') > Session::get('NumPreg'))
		   {
			   echo 'error se intenta acceder a una pregunta inexistente';
		   }
		   else
		   {
			   
			   if (SESSION::GET('Reporte')=='r1')
			   {
				 DB::table('pregunta')->insert(['pregunta'=>$req->input('TPregunta'),'respuesta'=>$req->input('TRespuesta'),'TipoPregunta'=>1,'SigPregunta'=>$req->input('TRB'),'SigPregunta_Mala'=>$req->input('TRM')]);
				 Session::put('Reporte', 'r5');
				 
				 
				 $Preg = DB::select('select * from pregunta order by idpregunta DESC');
			    
				 DB::table('preguntaformulario')->insert(['numemro'=>Session::get('ContadorPre'),'formulario_id_examen'=>Session::get('IdForm'),'pregunta_idpregunta'=>$Preg[0]->idpregunta]);
                 Session::put('ContadorPre', Session::get('ContadorPre') + 1);
				
				 if (Session::get('NumPreg') == Session::get('ContadorPre'))
				   {
					   Session::put('Reporte', 'r4');
				   }
				 
				 return view('Questions/CrearPregunta');
			   }
			   else if (SESSION::GET('Reporte')=='r2')
			   {
				 DB::table('pregunta')->insert(['pregunta'=>$req->input('TPregunta'),'respuesta'=>$req->input('TRespuesta'),'TipoPregunta'=>2,'SigPregunta'=>$req->input('TRB'),'SigPregunta_Mala'=>$req->input('TRM'),'respuesta1'=>$req->input('Op1'), 'respuesta2'=>$req->input('Op2'),'respuesta3'=>$req->input('Op3'),'respuesta4'=>$req->input('Op4')]);
				  Session::put('Reporte', 'r5');
				  
				  $Preg = DB::select('select * from pregunta order by idpregunta DESC');
			    
				 DB::table('preguntaformulario')->insert(['numemro'=>Session::get('ContadorPre'),'formulario_id_examen'=>Session::get('IdForm'),'pregunta_idpregunta'=>$Preg[0]->idpregunta]);
                 Session::put('ContadorPre', Session::get('ContadorPre') + 1);
				  
				  if (Session::get('NumPreg') == Session::get('ContadorPre'))
				   {
					   Session::put('Reporte', 'r4');
				   }
				  
				  return view('Questions/CrearPregunta');
			   }
			   else if (SESSION::GET('Reporte')=='r3')
			   {
				 DB::table('pregunta')->insert(['pregunta'=>$req->input('TPregunta'),'respuesta'=>$req->input('TRespuesta'),'TipoPregunta'=>3,'SigPregunta'=>$req->input('TRB'),'SigPregunta_Mala'=>$req->input('TRM')]);
				 Session::put('Reporte', 'r5');
				 
				 
				 $Preg = DB::select('select * from pregunta order by idpregunta DESC');
			    
				 DB::table('preguntaformulario')->insert(['numemro'=>Session::get('ContadorPre'),'formulario_id_examen'=>Session::get('IdForm'),'pregunta_idpregunta'=>$Preg[0]->idpregunta]);
                 Session::put('ContadorPre', Session::get('ContadorPre') + 1);
				 
				 if (Session::get('NumPreg') == Session::get('ContadorPre'))
				   {
					   Session::put('Reporte', 'r4');
				   }
				 
				 return view('Questions/CrearPregunta');
			   }
			   else if (SESSION::GET('Reporte')=='r4')
			   {
				 DB::table('pregunta')->insert(['pregunta'=>$req->input('TPregunta'),'TipoPregunta'=>4, 'SigPregunta'=>1,'SigPregunta_Mala'=>1]);
				  Session::put('Reporte', 'r5');
				  
				  $Preg = DB::select('select * from pregunta order by idpregunta DESC');
			    
				 DB::table('preguntaformulario')->insert(['numemro'=>Session::get('ContadorPre'),'formulario_id_examen'=>Session::get('IdForm'),'pregunta_idpregunta'=>$Preg[0]->idpregunta]);
                 Session::put('ContadorPre', Session::get('ContadorPre') + 1);
				  
				  if (Session::get('NumPreg') == Session::get('ContadorPre'))
				   {
					   Session::put('Reporte', 'r4');
				   }
				  
				  return view('Questions/Operador');
			   }
			   else 
			   {
				   Session::put('Reporte', 'r5');
					echo 'error';
			   }
		   }

         }
	
	  public function registrar(Request $req)
	  {
			$Nombre = $req->input('name');
			$Edad = $req->input('edad');
			$Direccion = $req->input('dir');
			$tel = $req->input('tel');			
			$corr = $req->input('corr');
			$fo = $req->input('SelectForm');
			
			if ($Nombre != null) 
			{
				$data = array('nombre'=>$Nombre, 'edad'=>$Edad, 'direccion'=>$Direccion, 'telefono'=>$tel, 
				'correo_e'=>$corr);
				DB::table('cliente')->insert($data);
				$Clien = DB::select('select * from cliente order by cliente_id DESC');
				
				Session::put('IdClient', $Clien[0]->cliente_id);
				$Form = DB::select('select * from formulario where id_examen = :nom', ['nom'=>$fo ]);
				$exa = $Form[0]->id_examen;
				Session::put('IdForm', $exa);
				
				return redirect()->route('LeerPublicacion', ['id' => $Form[0]->id_examen]);
				
			}
			else 
			{
				$Formularios = DB::select('select * from formulario');
			
				return View('Auth/Register')->with('pregs',$Formularios);
			}

	  }
	  
	  public function Leer(Request $req, $id = null)
	{
		
		Session::put('IdForm', $id);
		$Publicaciones = DB::select('select * from preguntaformulario where formulario_id_examen = :id order by numemro ASC', ['id'=>$id]);
				
		$conteo = DB::select('select sum(sub1.Conteo) as Suma from (
				select count(p.idpreguntaformulario) as Conteo 
				from preguntaformulario p
				where p.formulario_id_examen = :id
				)sub1', ['id'=>$id]);
		
		Session::put('ConteoPreguntas', $conteo[0]->Suma);
		
		$Opcion = $req->input('SelectRespuesta'); 
		if ($Opcion != null) 
		{
			$Actual = Session::get('PreguntaActual');
			$Actual = $Actual + 1;
			Session::put('PreguntaActual', $Actual);
			
			if ($Actual >= Session::get('ConteoPreguntas'))
			{
				$idsaber = DB::select('select * from preguntaformulario where formulario_id_examen = :id  and numemro = :num ;', ['id'=>Session::get('IdForm'), 'num'=>($Actual-1)]);
				
				$data = array('Respuesta'=>$Opcion, 'cliente_cliente_id'=>Session::get('IdClient'),'preguntaformulario_idpreguntaformulario'=>$idsaber[0]->idpreguntaformulario);
				DB::table('respuestacliente')->insert($data);
				return view('/Questions/Operador');
			}
			else
			{
				$idsaber = DB::select('select * from preguntaformulario where formulario_id_examen = :id  and numemro = :num ;', ['id'=>Session::get('IdForm'), 'num'=>($Actual)]);
				
				$data = array('Respuesta'=>$Opcion, 'cliente_cliente_id'=>Session::get('IdClient'),'preguntaformulario_idpreguntaformulario'=>$idsaber[0]->idpreguntaformulario);
				DB::table('respuestacliente')->insert($data);
				
				$verificacion = DB::select('select p.respuesta ,p.SigPregunta, p.SigPregunta_Mala 
									from pregunta p, respuestacliente rc, preguntaformulario pf
									where rc.preguntaformulario_idpreguntaformulario = :id and rc.preguntaformulario_idpreguntaformulario = pf.idpreguntaformulario and pf.pregunta_idpregunta = p.idpregunta',
									['id'=>$idsaber[0]->idpreguntaformulario]);
				
				if ($verificacion[0]->respuesta == $Opcion)
				{
					$Actual = $verificacion[0]->SigPregunta - 1;
				}
				else
				{
					$Actual = $verificacion[0]->SigPregunta_Mala - 1;
				}
				
				$enun = DB::select('select * from pregunta where idpregunta = :pre', ['pre'=>$Publicaciones[$Actual]->pregunta_idpregunta]);
				Session::put('Pregunta', $enun[0]->pregunta);
				Session::put('TipPreg', $enun[0]->TipoPregunta);

				$preguntas = DB::select('select * from pregunta where idpregunta = :pre', ['pre'=>$Publicaciones[$Actual]->pregunta_idpregunta]);

				return View('Questions/LeerPublicacion')->with('pregs',$preguntas);
			}	
		}
		else
		{
				Session::put('PreguntaActual', 0);
			
				$enun = DB::select('select * from pregunta where idpregunta = :pre', ['pre'=>$Publicaciones[0]->pregunta_idpregunta]);
				
				Session::put('Pregunta', $enun[0]->pregunta);
				Session::put('TipPreg', $enun[0]->TipoPregunta);
				
				$preguntas = DB::select('select * from pregunta where idpregunta = :pre', ['pre'=>$Publicaciones[0]->pregunta_idpregunta]);
				
				return View('Questions/LeerPublicacion')->with('pregs',$preguntas);
		}
	}
	
}
