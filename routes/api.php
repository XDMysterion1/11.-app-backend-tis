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

/**
 * Api de Grupo-Empresa
 */
Route::get('getGrupoEmpresa','\App\Http\Controllers\GrupoEmpresaController@getGrupoEmpresa');

