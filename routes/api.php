<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArchivoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * Api de Roles
 */
Route::get('getRoles'            ,'\App\Http\Controllers\RolController@getRol');
Route::get('getRolId/{id}'       ,'\App\Http\Controllers\RolController@getRolId');
Route::post('createRol'          ,'\App\Http\Controllers\RolController@createRol');
Route::put('updateRol/{id}'      ,'\App\Http\Controllers\RolController@updateRol');
Route::delete('deleteRolId/{id}' ,'\App\Http\Controllers\RolController@deleteRolId');
/**
 * Api de Users
 */
Route::get('getUsers'             ,'\App\Http\Controllers\UserController@getUser');
Route::get('getUserId/{id}'       ,'\App\Http\Controllers\UserController@getUserId');
Route::post('createUser'          ,'\App\Http\Controllers\UserController@createUser');
Route::put('updateUser/{id}'      ,'\App\Http\Controllers\UserController@updateUser');
Route::delete('deleteUserId/{id}' ,'\App\Http\Controllers\UserController@deleteUserId');

/**
 * Api de Grupo-Empresa
 */
Route::get('getGrupoEmpresa','\App\Http\Controllers\GrupoEmpresaController@getGrupoEmpresa');

///plan
Route::post("upload", [ArchivoController::class, 'upload']);
Route::get("download", [ArchivoController::class, 'download']);
//convocatoria
Route::post("uploadConvocatoria", [ArchivoController::class, 'uploadConvocatoria']);
Route::get("downloadConvocatoria", [ArchivoController::class, 'downloadConvocatoria']);
//pliego
Route::post("uploadPliego", [ArchivoController::class, 'uploadPliego']);
Route::get("downloadPliego", [ArchivoController::class, 'downloadPliego']);
//parte A
Route::post("uploadParteA", [ArchivoController::class, 'uploadParteA']);
Route::get("downloadParteA", [ArchivoController::class, 'downloadParteA']);
//parte B
Route::post("uploadParteB", [ArchivoController::class, 'uploadParteB']);
Route::get("downloadParteB", [ArchivoController::class, 'downloadParteB']);