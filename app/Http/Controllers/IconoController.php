<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Icono;

class IconoController extends Controller
{
    //
    public function getIcono(){
        return response()->json(Icono::all(),200);
    }
    public function getIconoId($id){
        $icono = Icono::find($id);
        if(is_null($icono)){
            return response()->json(['Mensaje'=>'Icono no encontrado'],404);
        }
        return response()->json($icono::find($id),200);
    }
    public function createIcono(Request $request){
        $icono = Icono::create($request->all());
        return response($icono,200);
    }
    public function updateIcono(Request $request,$id){
        $icono = Icono::find($id);
        if(is_null($icono)){
            return response()->json(['Mensaje'=>'Icono no encontrado'],404);
        }
        $icono->update($request->all());
        return response($icono,200);
    }
    public function deleteIconoId($id){
        $icono = Icono::find($id);
        if(is_null($icono)){
            return response()->json(['Mensaje'=>'Icono no encontrado'],404);
        }
        $icono->delete();
        return response()->json(['Mensaje'=>'Icono Eliminado'],200);
    }
    public function getIconosActivas(){
        $icono = Icono::select("*")->where("estado", "=","Activo")->get();
        return response()->json($icono,200);
    }
}
