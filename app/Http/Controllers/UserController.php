<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function getUser(){
        return response()->json(User::all(),200);
        //return json_encode(GrupoEmpresa::all(),200);
    }
    public function getUserId($id){
        $user = User::find($id);
        if(is_null($user)){
            return response()->json(['Mensaje'=>'Usuario no encontrado'],404);
        }
        return response()->json($user::find($id),200);
    }
    public function createUser(Request $request){
        $user = User::create($request->all());
        return response($user,200);
    }
    public function updateUser(Request $request,$id){
        $user = User::find($id);
        if(is_null($user)){
            return response()->json(['Mensaje'=>'Usuario  no encontrado'],404);
        }
        $user->update($request->all());
        return response($user,200);
    }
    public function deleteUserId($id){
        $user = User::find($id);
        if(is_null($user)){
            return response()->json(['Mensaje'=>'Usuario  no encontrado'],404);
        }
        $user->delete();
        return response()->json(['Mensaje'=>'Usuario  Eliminado'],200);
    }

    public function login(Request $request)
    {
        $email     = $request->input('email');
        $password  = $request->input('password');
   
        $user = User::where('email', '=', $email)->first();

        if ((strtoupper($email) == strtoupper($user->email)) && ($password == $user->password)) {
           return response($user,200);
        }else{
            return response()->json(['Error'=>'Correo o contraseña incorrectas'],404);
        }
    }


}
