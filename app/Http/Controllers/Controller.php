<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

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
       echo "Login SuccessFull<br/>";;
      }
      else
      {
       echo "Login Faield Wrong Data Passed";
      }
  }




}
