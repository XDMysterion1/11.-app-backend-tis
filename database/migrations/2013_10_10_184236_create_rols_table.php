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
            $table->timestamps();
        });
        DB::table('rols')->insert(array('id'=>'rol-1as21sdfg','rol'=>'Administrador'));
        DB::table('rols')->insert(array('id'=>'rol-21sd3dgrf','rol'=>'Docente'));
        DB::table('rols')->insert(array('id'=>'rol-3dsd33wff','rol'=>'Desarrollador'));
        DB::table('rols')->insert(array('id'=>'rol-4d3dasgfd','rol'=>'Control de Calidad'));
        DB::table('rols')->insert(array('id'=>'rol-kv5cngnu' ,'rol'=>'Encargado de laboratorio'));
        DB::table('rols')->insert(array('id'=>'rol-kv5n01yh' ,'rol'=>'Auxiliar de Laboratorio'));
        DB::table('rols')->insert(array('id'=>'rol-kvdqr9vr' ,'rol'=>'Empresario'));
        DB::table('rols')->insert(array('id'=>'rol-kvjva7f6' ,'rol'=>'usuario'));
        DB::table('rols')->insert(array('id'=>'rol-kvogs4cm' ,'rol'=>'QA'));
        DB::table('rols')->insert(array('id'=>'rol-kwh5fxch' ,'rol'=>'Auxiliar'));
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
