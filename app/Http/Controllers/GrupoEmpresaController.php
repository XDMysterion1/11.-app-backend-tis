<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GrupoEmpresa;
class GrupoEmpresaController extends Controller
{
    //
    public function getGrupoEmpresa(){
        return response()->json(GrupoEmpresa::all(),200);
        //return json_encode(GrupoEmpresa::all(),200);
    }
}
