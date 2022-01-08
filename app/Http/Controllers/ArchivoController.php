<?php

namespace App\Http\Controllers;

use Illuminate\Http\File;

use Illuminate\Http\Request;

class ArchivoController extends Controller
{
    ///plan de pagos
    function upload(Request $req){

        $result = $req->file('file')->store('Plan');
        return ["result"=>$result];
    }

    function download(Request $req){
        $path = storage_path('app\Plan\OQvQPabIrhs1cSQM3vuG9tF1gz7EDQUdbWCJ5ndp.pdf');
        return response()->download($path);
    }
    ///convocatoria
    function uploadConvocatoria(Request $req){

        $result = $req->file('file')->store('Convocatoria');
        return ["result"=>$result];
    }

    function downloadConvocatoria(Request $req){
        $path = storage_path('app\Convocatoria\JB9ST4ETRzKoj0AvlD0QqkdblXWITYgZFMmnyaed.pdf');
        return response()->download($path);
    }
    ///pliego
    function uploadPliego(Request $req){

        $result = $req->file('file')->store('Pliego');
        return ["result"=>$result];
    }

    function downloadPliego(Request $req){
        $path = storage_path('app\Pliego\OM5j0Ubpc9gu2UleP6gCsEavVs6cf7LHyogKY5d4.pdf');
        return response()->download($path);
    }
    //parteA
    function uploadParteA(Request $req){

        $result = $req->file('file')->store('ParteA');
        return ["result"=>$result];
    }

    function downloadParteA(Request $req){
        $path = storage_path('app\ParteA\xujGlVXsBwIiY0K7coGlbrFeTiXbZuRIA9ujc9Ut.pdf');
        return response()->download($path);
    }
    //parteB
    function uploadParteB(Request $req){

        $result = $req->file('file')->store('ParteB');
        return ["result"=>$result];
    }

    function downloadParteB(Request $req){
        $path = storage_path('app\ParteB\QGYYRHmPWtDuIzM1d2FdpucWUXLzh5wQjm7THiUD.pdf');
        return response()->download($path);
    }

}
