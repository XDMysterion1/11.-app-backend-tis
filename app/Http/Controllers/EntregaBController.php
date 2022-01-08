<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EntregaB;

class EntregaBController extends Controller
{
    //
    public function getEntregaB(){
        return response()->json(EntregaB::all(),200);
    }
    public function getEntregaBId($id){
        $entregaB = EntregaB::find($id);
        if(is_null($entregaB)){
            return response()->json(['Mensaje'=>'EntregaB no encontrado'],404);
        }
        return response()->json($entregaB::find($id),200);
    }
    public function createEntregaB(Request $request){
        $entregaB = EntregaB::create($request->all());
        return response($entregaB,200);
    }
    public function updateEntregaB(Request $request,$id){
        $entregaB = EntregaB::find($id);
        if(is_null($entregaB)){
            return response()->json(['Mensaje'=>'EntregaB  no encontrado'],404);
        }
        $entregaB->update($request->all());
        return response($entregaB,200);
    }
    public function deleteEntregaBId($id){
        $entregaB = EntregaB::find($id);
        if(is_null($entregaB)){
            return response()->json(['Mensaje'=>'EntregaB  no encontrado'],404);
        }
        $entregaB->delete();
        return response()->json(['Mensaje'=>'EntregaB  Eliminado'],200);
    }
    public function getEntregaBsActivas(){
        $entregaB = EntregaB::select("*")->where("estado", "=","Activo")->get();
        return response()->json($entregaB,200);
    }
}
