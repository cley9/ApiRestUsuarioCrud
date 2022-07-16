<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;

class userController extends Controller
{
    //Logic Api

    // function
    function view(){
        // return 23;
        $user=Usuario::all();
return $user;
    }

    function insert(Request $request){
        $user=new Usuario();
        $user->nombre=$request->nombre;
        // $user->nombre='$request->nombre';
        $user->apellido=$request->apellido;
        $user->correo=$request->correo;
        $user->edad=$request->edad;
        $user->sexo=$request->sexo;
        $user->save();
        return $user;


        //
        // $user=Usuario::create($request->all());

        // return $request;
        // return $user;

    }


    // function insert(Request $request){
    //     $user=new Usuario();
    //     $user->nombre=$request->nombre;
    //     $user->apellido=$request->apellido;
    //     $user->correo=$request->correo;
    //     $user->edad=$request->edad;
    //     $user->sexo=$request->sexo;
    //     $user->save();
    //     return $user;

    // }





}
