<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rols', function (Blueprint $table) {
            $table->string('id', 30)->primary();
            $table->string('rol');
            $table->string('estado');
            $table->timestamps();
        });
        DB::table('rols')->insert(array('id'=>'rol-1as21sdfg','rol'=>'Administrador'           ,'estado'=>'Activo'));
        DB::table('rols')->insert(array('id'=>'rol-21sd3dgrf','rol'=>'Docente'                 ,'estado'=>'Activo'));
        DB::table('rols')->insert(array('id'=>'rol-3dsd33wff','rol'=>'Desarrollador'           ,'estado'=>'Activo'));
        DB::table('rols')->insert(array('id'=>'rol-4d3dasgfd','rol'=>'Control de Calidad'      ,'estado'=>'Activo'));
        DB::table('rols')->insert(array('id'=>'rol-kv5cngnu' ,'rol'=>'Encargado de laboratorio','estado'=>'Activo'));
        DB::table('rols')->insert(array('id'=>'rol-kv5n01yh' ,'rol'=>'Auxiliar de Laboratorio' ,'estado'=>'Activo'));
        DB::table('rols')->insert(array('id'=>'rol-kvdqr9vr' ,'rol'=>'Empresario'              ,'estado'=>'Activo'));
        DB::table('rols')->insert(array('id'=>'rol-kvjva7f6' ,'rol'=>'usuario'                 ,'estado'=>'Activo'));
        DB::table('rols')->insert(array('id'=>'rol-kvogs4cm' ,'rol'=>'QA'                      ,'estado'=>'Activo'));
        DB::table('rols')->insert(array('id'=>'rol-kwh5fxch' ,'rol'=>'Auxiliar'                ,'estado'=>'Activo'));
        DB::table('rols')->insert(array('id'=>'rol-kwu1j57t' ,'rol'=>'Mensajero'               ,'estado'=>'Activo'));
        DB::table('rols')->insert(array('id'=>'rol-kwu2d5rl' ,'rol'=>'NuevoRol'                ,'estado'=>'Activo'));
        DB::table('rols')->insert(array('id'=>'rol-ky210yq5' ,'rol'=>'MENSAJEROS'              ,'estado'=>'Activo'));
        DB::table('rols')->insert(array('id'=>'rol-ky3hq0kb' ,'rol'=>'Estudiante'              ,'estado'=>'Activo'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rols');
    }
}
