<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;

class PlanController extends Controller
{
    //
    public function getPlan(){
        return response()->json(Plan::all(),200);
    }
    public function getPlanId($id){
        $plan = Plan::find($id);
        if(is_null($plan)){
            return response()->json(['Mensaje'=>'Plan no encontrado'],404);
        }
        return response()->json($plan::find($id),200);
    }
    public function createPlan(Request $request){
        $plan = Plan::create($request->all());
        return response($plan,200);
    }
    public function updatePlan(Request $request,$id){
        $plan = Plan::find($id);
        if(is_null($plan)){
            return response()->json(['Mensaje'=>'Plan  no encontrado'],404);
        }
        $plan->update($request->all());
        return response($plan,200);
    }
    public function deletePlanId($id){
        $plan = Plan::find($id);
        if(is_null($plan)){
            return response()->json(['Mensaje'=>'Plan  no encontrado'],404);
        }
        $plan->delete();
        return response()->json(['Mensaje'=>'Plan  Eliminado'],200);
    }
    public function getPlansActivas(){
        $plan = Plan::select("*")->where("estado", "=","Activo")->get();
        return response()->json($plan,200);
    }
}
