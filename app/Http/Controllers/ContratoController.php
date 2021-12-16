<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contrato;

class ContratoController extends Controller
{
    //
    public function getContrato(){
        return response()->json(Contrato::all(),200);
    }
    public function getContratoId($id){
        $contrato = Contrato::find($id);
        if(is_null($contrato)){
            return response()->json(['Mensaje'=>'Contrato no encontrado'],404);
        }
        return response()->json($contrato::find($id),200);
    }
    public function createContrato(Request $request){
        $contrato = Contrato::create($request->all());
        return response($contrato,200);
    }
    public function updateContrato(Request $request,$id){
        $contrato = Contrato::find($id);
        if(is_null($contrato)){
            return response()->json(['Mensaje'=>'Contrato  no encontrado'],404);
        }
        $contrato->update($request->all());
        return response($contrato,200);
    }
    public function deleteContratoId($id){
        $contrato = Contrato::find($id);
        if(is_null($contrato)){
            return response()->json(['Mensaje'=>'Contrato  no encontrado'],404);
        }
        $contrato->delete();
        return response()->json(['Mensaje'=>'Contrato  Eliminado'],200);
    }
    public function getContratosActivas(){
        $contrato = Contrato::select("*")->where("estado", "=","Activo")->get();
        return response()->json($contrato,200);
    }

}
