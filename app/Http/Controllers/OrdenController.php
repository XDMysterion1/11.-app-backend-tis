<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orden;

class OrdenController extends Controller
{
    //
    public function getOrden(){
        return response()->json(Orden::all(),200);
    }
    public function getOrdenId($id){
        $orden = Orden::find($id);
        if(is_null($orden)){
            return response()->json(['Mensaje'=>'Orden no encontrado'],404);
        }
        return response()->json($orden::find($id),200);
    }
    public function createOrden(Request $request){
        $orden = Orden::create($request->all());
        return response($orden,200);
    }
    public function updateOrden(Request $request,$id){
        $orden = Orden::find($id);
        if(is_null($orden)){
            return response()->json(['Mensaje'=>'Orden  no encontrado'],404);
        }
        $orden->update($request->all());
        return response($orden,200);
    }
    public function deleteOrdenId($id){
        $orden = Orden::find($id);
        if(is_null($orden)){
            return response()->json(['Mensaje'=>'Orden  no encontrado'],404);
        }
        $orden->delete();
        return response()->json(['Mensaje'=>'Orden  Eliminado'],200);
    }
    public function getOrdensActivas(){
        $orden = Orden::select("*")->where("estado", "=","Activo")->get();
        return response()->json($orden,200);
    }
}
