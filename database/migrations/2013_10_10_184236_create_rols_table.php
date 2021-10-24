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
        DB::table('rols')->insert(array('id'=>'1as21s','rol'=>'Administrador'));
        DB::table('rols')->insert(array('id'=>'21sd3d','rol'=>'Docente'));
        DB::table('rols')->insert(array('id'=>'3dsd33','rol'=>'Desarrollador'));
        DB::table('rols')->insert(array('id'=>'4d3das','rol'=>'Control de Calidad'));
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
