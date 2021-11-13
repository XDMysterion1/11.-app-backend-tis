<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Convocatoria;

class ConvocatoriaController extends Controller
{
    //
    public function getConvocatoria(){
        return response()->json(Convocatoria::all(),200);
    }

    public function getConvocatoriaId($id){
        $convocatoria = Convocatoria::find($id);
        if(is_null($convocatoria)){
            return response()->json(['Mensaje'=>'Convocatoria no encontrado'],404);
        }
        return response()->json($convocatoria::find($id),200);
    }

    public function createConvocatoria(Request $request){
        $convocatoria = Convocatoria::create($request->all());
        return response($convocatoria,200);
    }

    public function updateConvocatoria(Request $request,$id){
        $convocatoria = Convocatoria::find($id);
        if(is_null($convocatoria)){
            return response()->json(['Mensaje'=>'Convocatoria  no encontrado'],404);
        }
        $convocatoria->update($request->all());
        return response($convocatoria,200);
    }

    public function deleteConvocatoriaId($id){
        $convocatoria = Convocatoria::find($id);
        if(is_null($convocatoria)){
            return response()->json(['Mensaje'=>'Convocatoria  no encontrado'],404);
        }
        $convocatoria->delete();
        return response()->json(['Mensaje'=>'Convocatoria  Eliminado'],200);
    }

}
