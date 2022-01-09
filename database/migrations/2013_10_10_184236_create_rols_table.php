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
        DB::table('rols')->insert(array('id'=>'rol-kvjva7f6' ,'rol'=>'Usuario'                 ,'estado'=>'Activo'));
        DB::table('rols')->insert(array('id'=>'rol-ky3hq0kb' ,'rol'=>'Estudiante'              ,'estado'=>'Activo'));
        DB::table('rols')->insert(array('id'=>'rol-21sd3dgrf','rol'=>'Docente'                 ,'estado'=>'Activo'));
        DB::table('rols')->insert(array('id'=>'rol-gt521sdfg','rol'=>'NoUsuario'               ,'estado'=>'Activo'));
        DB::table('rols')->insert(array('id'=>'rol-xd521sdfg','rol'=>'QA'                      ,'estado'=>'Activo'));
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
