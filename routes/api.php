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
Route::get('getRolesActivas'     ,'\App\Http\Controllers\RolController@getRolesActivas');

/**
 * Api de Users
 */
Route::get('getUsers'             ,'\App\Http\Controllers\UserController@getUser');
Route::get('getUserId/{id}'       ,'\App\Http\Controllers\UserController@getUserId');
Route::post('createUser'          ,'\App\Http\Controllers\UserController@createUser');
Route::put('updateUser/{id}'      ,'\App\Http\Controllers\UserController@updateUser');
Route::delete('deleteUserId/{id}' ,'\App\Http\Controllers\UserController@deleteUserId');
Route::post('login'               ,'\App\Http\Controllers\UserController@login');
Route::get('getUsersActivas'      ,'\App\Http\Controllers\UserController@getUsersActivas');

/**
 * Api de Empresa
 */
Route::get('getEmpresas'             ,'\App\Http\Controllers\EmpresaController@getEmpresa');
Route::get('getEmpresaId/{id}'       ,'\App\Http\Controllers\EmpresaController@getEmpresaId');
Route::post('createEmpresa'          ,'\App\Http\Controllers\EmpresaController@createEmpresa');
Route::put('updateEmpresa/{id}'      ,'\App\Http\Controllers\EmpresaController@updateEmpresa');
Route::delete('deleteEmpresaId/{id}' ,'\App\Http\Controllers\EmpresaController@deleteEmpresaId');
Route::get('getEmpresasActivas'      ,'\App\Http\Controllers\EmpresaController@getEmpresasActivas');

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

/**
 * Api de Contrato
 */
Route::get('getContratos'             ,'\App\Http\Controllers\ContratoController@getContrato');
Route::get('getContratoId/{id}'       ,'\App\Http\Controllers\ContratoController@getContratoId');
Route::post('createContrato'          ,'\App\Http\Controllers\ContratoController@createContrato');
Route::put('updateContrato/{id}'      ,'\App\Http\Controllers\ContratoController@updateContrato');
Route::delete('deleteContratoId/{id}' ,'\App\Http\Controllers\ContratoController@deleteContratoId');
Route::get('getContratosActivas'      ,'\App\Http\Controllers\ContratoController@getContratosActivas');

/**
 * Api de Orden de cambio
 */
Route::get('getOrdens'             ,'\App\Http\Controllers\OrdenController@getOrden');
Route::get('getOrdenId/{id}'       ,'\App\Http\Controllers\OrdenController@getOrdenId');
Route::post('createOrden'          ,'\App\Http\Controllers\OrdenController@createOrden');
Route::put('updateOrden/{id}'      ,'\App\Http\Controllers\OrdenController@updateOrden');
Route::delete('deleteOrdenId/{id}' ,'\App\Http\Controllers\OrdenController@deleteOrdenId');
Route::get('getOrdensActivas'      ,'\App\Http\Controllers\OrdenController@getOrdensActivas');

/**
 * Api de Plan de pagos
 */
Route::get('getPlans'             ,'\App\Http\Controllers\PlanController@getPlan');
Route::get('getPlanId/{id}'       ,'\App\Http\Controllers\PlanController@getPlanId');
Route::post('createPlan'          ,'\App\Http\Controllers\PlanController@createPlan');
Route::put('updatePlan/{id}'      ,'\App\Http\Controllers\PlanController@updatePlan');
Route::delete('deletePlanId/{id}' ,'\App\Http\Controllers\PlanController@deletePlanId');
Route::get('getPlansActivas'      ,'\App\Http\Controllers\PlanController@getPlansActivas');

/**
 * Api de Entrega Sobre A
 */
Route::get('getEntregaAs'             ,'\App\Http\Controllers\EntregaAController@getEntregaA');
Route::get('getEntregaAId/{id}'       ,'\App\Http\Controllers\EntregaAController@getEntregaAId');
Route::post('createEntregaA'          ,'\App\Http\Controllers\EntregaAController@createEntregaA');
Route::put('updateEntregaA/{id}'      ,'\App\Http\Controllers\EntregaAController@updateEntregaA');
Route::delete('deleteEntregaAId/{id}' ,'\App\Http\Controllers\EntregaAController@deleteEntregaAId');
Route::get('getEntregaAsActivas'      ,'\App\Http\Controllers\EntregaAController@getEntregaAsActivas');

/**
 * Api de Entrega Sobre A
 */
Route::get('getEntregaBs'             ,'\App\Http\Controllers\EntregaBController@getEntregaB');
Route::get('getEntregaBId/{id}'       ,'\App\Http\Controllers\EntregaBController@getEntregaBId');
Route::post('createEntregaB'          ,'\App\Http\Controllers\EntregaBController@createEntregaB');
Route::put('updateEntregaB/{id}'      ,'\App\Http\Controllers\EntregaBController@updateEntregaB');
Route::delete('deleteEntregaBId/{id}' ,'\App\Http\Controllers\EntregaBController@deleteEntregaBId');
Route::get('getEntregaBsActivas'      ,'\App\Http\Controllers\EntregaBController@getEntregaBsActivas');

