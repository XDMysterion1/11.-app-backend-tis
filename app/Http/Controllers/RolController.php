<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rol;

class RolController extends Controller
{
    //
    public function getRol(){
        return response()->json(Rol::all(),200);
        //return json_encode(GrupoEmpresa::all(),200);
    }
    public function getRolId($id){
        $rol = Rol::find($id);
        if(is_null($rol)){
            return response()->json(['Mensaje'=>'Rol no encontrado'],404);
        }
        return response()->json($rol::find($id),200);
    }
    public function createRol(Request $request){
        $rol = Rol::create($request->all());
        return response($rol,200);
    }
    public function updateRol(Request $request,$id){
        $rol = Rol::find($id);
        if(is_null($rol)){
            return response()->json(['Mensaje'=>'Rol no encontrado'],404);
        }
        $rol->update($request->all());
        return response($rol,200);
    }
    public function deleteRolId($id){
        $rol = Rol::find($id);
        if(is_null($rol)){
            return response()->json(['Mensaje'=>'Rol no encontrado'],404);
        }
        $rol->delete();
        return response()->json(['Mensaje'=>'Rol Eliminado'],200);
    }
}
