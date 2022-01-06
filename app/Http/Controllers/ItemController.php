<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    //
    public function getItem(){
        return response()->json(Item::all(),200);
    }
    public function getItemId($id){
        $item = Item::find($id);
        if(is_null($item)){
            return response()->json(['Mensaje'=>'Item no encontrado'],404);
        }
        return response()->json($item::find($id),200);
    }
    public function createItem(Request $request){
        $item = Item::create($request->all());
        return response($item,200);
    }
    public function updateItem(Request $request,$id){
        $item = Item::find($id);
        if(is_null($item)){
            return response()->json(['Mensaje'=>'Item no encontrado'],404);
        }
        $item->update($request->all());
        return response($item,200);
    }
    public function deleteItemId($id){
        $item = Item::find($id);
        if(is_null($item)){
            return response()->json(['Mensaje'=>'Item no encontrado'],404);
        }
        $item->delete();
        return response()->json(['Mensaje'=>'Item Eliminado'],200);
    }
    public function getItemsActivas(){
        $item = Item::select("*")->where("estado", "=","Activo")->get();
        return response()->json($item,200);
    }
    public function getItemsRol($rol){
        $item = Item::select("*")->where("rol", "=",$rol)->get();
        return response()->json($item,200);
    }
}
