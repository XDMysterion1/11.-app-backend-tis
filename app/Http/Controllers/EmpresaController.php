<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;

class EmpresaController extends Controller
{
     //
     public function getEmpresa(){
        return response()->json(Empresa::all(),200);
        //return json_encode(GrupoEmpresa::all(),200);
    }
    public function getEmpresaId($id){
        $empresa = Empresa::find($id);
        if(is_null($empresa)){
            return response()->json(['Mensaje'=>'Empresa no encontrado'],404);
        }
        return response()->json($empresa::find($id),200);
    }
    public function createEmpresa(Request $request){
        $empresa = Empresa::create($request->all());
        return response($empresa,200);
    }
    public function updateEmpresa(Request $request,$id){
        $empresa = Empresa::find($id);
        if(is_null($empresa)){
            return response()->json(['Mensaje'=>'Empresa  no encontrado'],404);
        }
        $empresa->update($request->all());
        return response($empresa,200);
    }
    public function deleteEmpresaId($id){
        $empresa = Empresa::find($id);
        if(is_null($empresa)){
            return response()->json(['Mensaje'=>'Empresa  no encontrado'],404);
        }
        $empresa->delete();
        return response()->json(['Mensaje'=>'Empresa  Eliminado'],200);
    }

}
