<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::post('login'               ,'\App\Http\Controllers\UserController@login');

/**
 * Api de Empresa
 */
Route::get('getEmpresas'             ,'\App\Http\Controllers\EmpresaController@getEmpresa');
Route::get('getEmpresaId/{id}'       ,'\App\Http\Controllers\EmpresaController@getEmpresaId');
Route::post('createEmpresa'          ,'\App\Http\Controllers\EmpresaController@createEmpresa');
Route::put('updateEmpresa/{id}'      ,'\App\Http\Controllers\EmpresaController@updateEmpresa');
Route::delete('deleteEmpresaId/{id}' ,'\App\Http\Controllers\EmpresaController@deleteEmpresaId');

/**
 * Api de Convocatoria
 */
Route::get('getConvocatorias'             ,'\App\Http\Controllers\ConvocatoriaController@getConvocatoria');
Route::get('getConvocatoriaId/{id}'       ,'\App\Http\Controllers\ConvocatoriaController@getConvocatoriaId');
Route::post('createConvocatoria'          ,'\App\Http\Controllers\ConvocatoriaController@createConvocatoria');
Route::put('updateConvocatoria/{id}'      ,'\App\Http\Controllers\ConvocatoriaController@updateConvocatoria');
Route::delete('deleteConvocatoriaId/{id}' ,'\App\Http\Controllers\ConvocatoriaController@deleteConvocatoriaId');
Route::get('getConvocatoriasPublicados'   ,'\App\Http\Controllers\ConvocatoriaController@getConvocatoriasPublicados');

/**
 * Api de Pliego
 */
Route::get('getPliegos'             ,'\App\Http\Controllers\PliegoController@getPliego');
Route::get('getPliegoId/{id}'       ,'\App\Http\Controllers\PliegoController@getPliegoId');
Route::post('createPliego'          ,'\App\Http\Controllers\PliegoController@createPliego');
Route::put('updatePliego/{id}'      ,'\App\Http\Controllers\PliegoController@updatePliego');
Route::delete('deletePliegoId/{id}' ,'\App\Http\Controllers\PliegoController@deletePliegoId');
Route::get('getPliegosPublicados'   ,'\App\Http\Controllers\PliegoController@getPliegosPublicados');

