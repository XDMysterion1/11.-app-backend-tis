<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntregaASTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrega_a_s', function (Blueprint $table) {
            $table->string('id', 30)->primary();
            $table->string('link',500);
            $table->string('fechaInicio');
            $table->string('fechaCierre');
            $table->string('estado');
            $table->timestamps();

            $table->string('user'); 
            $table->foreign('user')->references('id')->on('users')->nullable()->onDelete('SET NULL');
        });

        DB::table('entrega_a_s')->
        insert(array(
        'id'           =>'parteA-kxam8oav',
        'link'         =>'https://www.google.com/',
        'fechaInicio'  =>'martes, 21 de diciembre de 2021',
        'fechaCierre'  =>'miércoles, 22 de diciembre de 2021',
        'estado'       =>'Activo',
        'user'         =>'user-xchf2g4y'
        ));

        DB::table('entrega_a_s')->
        insert(array(
        'id'           =>'parteA-kxjpleyb',
        'link'         =>'https://www.google.com/',
        'fechaInicio'  =>'viernes, 31 de diciembre de 2021',
        'fechaCierre'  =>'sábado, 11 de diciembre de 2021',
        'estado'       =>'Activo',
        'user'         =>'user-xchf2g4y'
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entrega_a_s');
    }
}
