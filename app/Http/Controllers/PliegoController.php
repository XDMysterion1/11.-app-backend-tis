<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pliego;

class PliegoController extends Controller
{
    //
    public function getPliego(){
        return response()->json(Pliego::all(),200);
    }
    public function getPliegoId($id){
        $pliego = Pliego::find($id);
        if(is_null($pliego)){
            return response()->json(['Mensaje'=>'Pliego no encontrado'],404);
        }
        return response()->json($pliego::find($id),200);
    }
    public function createPliego(Request $request){
        $pliego = Pliego::create($request->all());
        return response($pliego,200);
    }
    public function updatePliego(Request $request,$id){
        $pliego = Pliego::find($id);
        if(is_null($pliego)){
            return response()->json(['Mensaje'=>'Pliego  no encontrado'],404);
        }
        $pliego->update($request->all());
        return response($pliego,200);
    }
    public function deletePliegoId($id){
        $pliego = Pliego::find($id);
        if(is_null($pliego)){
            return response()->json(['Mensaje'=>'Pliego  no encontrado'],404);
        }
        $pliego->delete();
        return response()->json(['Mensaje'=>'Pliego  Eliminado'],200);
    }

}
