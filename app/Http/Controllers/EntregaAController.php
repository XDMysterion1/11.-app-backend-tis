<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EntregaA;

class EntregaAController extends Controller
{
    //
    public function getEntregaA(){
        return response()->json(EntregaA::all(),200);
    }
    public function getEntregaAId($id){
        $entregaA = EntregaA::find($id);
        if(is_null($entregaA)){
            return response()->json(['Mensaje'=>'EntregaA no encontrado'],404);
        }
        return response()->json($entregaA::find($id),200);
    }
    public function createEntregaA(Request $request){
        $entregaA = EntregaA::create($request->all());
        return response($entregaA,200);
    }
    public function updateEntregaA(Request $request,$id){
        $entregaA = EntregaA::find($id);
        if(is_null($entregaA)){
            return response()->json(['Mensaje'=>'EntregaA  no encontrado'],404);
        }
        $entregaA->update($request->all());
        return response($entregaA,200);
    }
    public function deleteEntregaAId($id){
        $entregaA = EntregaA::find($id);
        if(is_null($entregaA)){
            return response()->json(['Mensaje'=>'EntregaA  no encontrado'],404);
        }
        $entregaA->delete();
        return response()->json(['Mensaje'=>'EntregaA  Eliminado'],200);
    }
    public function getEntregaAsActivas(){
        $entregaA = EntregaA::select("*")->where("estado", "=","Activo")->get();
        return response()->json($entregaA,200);
    }
}
