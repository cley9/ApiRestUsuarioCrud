<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;

class userController extends Controller
{
    function view(){
        $user=Usuario::all();
        return $user;
    }

    function insert(Request $request){
        $user=new Usuario();
        $user->primerNombre=$request->primerNombre;
        $user->segundoNombre=$request->segundoNombre;
        $user->apellidoPaterno=$request->apellidoPaterno;
        $user->apellidoMaterno=$request->apellidoMaterno;
        $user->dni=$request->dni;
        $user->residencia=$request->residencia;
        $user->fechaNacimiento=$request->fechaNacimiento;
        $user->edad=$request->edad;
        $user->sexo=$request->sexo;
        $user->correo=$request->correo;
        if ($user->save()) {
            return response()->json([
                'status'=>'Se inserto correctamente el usuario',
                'code'=>201
            ],201);
        }else{
            return response()->json([
                'errors'=>([
                    'code'=>422,
                    'message'=>'No se inserto el usuario.'
                ])
            ],422);
        }

    }
    function update(Request $request){
        $user=Usuario::find($request->id);
        $user->primerNombre=$request->primerNombre;
        $user->segundoNombre=$request->segundoNombre;
        $user->apellidoPaterno=$request->apellidoPaterno;
        $user->apellidoMaterno=$request->apellidoMaterno;
        $user->dni=$request->dni;
        $user->residencia=$request->residencia;
        $user->fechaNacimiento=$request->fechaNacimiento;
        $user->edad=$request->edad;
        $user->sexo=$request->sexo;
        $user->correo=$request->correo;
        if ($user->save()) {
            return response()->json([
                'status'=>'Se actualizo correctamente el usuario',
                'code'=>200
            ],200);
        }else{
            return response()->json([
                'errors'=>([
                    'code'=>422,
                    'message'=>'No se pudo actualizar el usuario.'
                ])
            ],422);
        }
    }

    function delete($id){
        $user=Usuario::find($id);
        if (!$user) {
            return response()->json([
                'errors'=>([
                    'code'=>404,
                    'message'=>'No existe el usuario con el id a eliminar.'
                    ])
                ],404);
            }else {
            $user->delete();
            return response()->json([
                'status'=>'Se elimino el usuario '.$id,
                'data'=> 200
            ],200);
        }
    }

    function search($id){
        $user=Usuario::find($id);
        if (!$user) {
            return response()->json([
                'errors'=>([
                    'code'=>404,
                    'message'=>'No se encontro el usuario con el id.'
                ])
            ],404);
        }else {
            return response()->json([
                'status'=>'Encontrado',
                'data'=>$user
            ],200);
        }

    }


}
