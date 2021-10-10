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
            $table->id();
            $table->string('rol');
            $table->timestamps();
        });
        DB::table('rols')->insert(array('id'=>'1','rol'=>'Administrador'));
        DB::table('rols')->insert(array('id'=>'2','rol'=>'Docente'));
        DB::table('rols')->insert(array('id'=>'3','rol'=>'Desarrollador'));
        DB::table('rols')->insert(array('id'=>'4','rol'=>'Control de Calidad'));
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
