<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntregaBSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrega_b_s', function (Blueprint $table) {
            $table->string('id', 30)->primary();
            $table->string('link',500);
            $table->string('fechaInicio');
            $table->string('fechaCierre');
            $table->string('estado');
            $table->timestamps();

            $table->string('user'); 
            $table->foreign('user')->references('id')->on('users')->nullable()->onDelete('SET NULL');
        });

        DB::table('entrega_b_s')->
        insert(array(
        'id'           =>'parteB-kxoqwogg',
        'link'         =>'https://docs.google.com/document/d/12bS1n3ITXgRhhehFTVg0L8yWHijI1vWUQFaSRSN9_x0/edit#',
        'fechaInicio'  =>'sábado, 15 de enero de 2022',
        'fechaCierre'  =>'lunes, 27 de diciembre de 2021',
        'estado'       =>'Activo',
        'user'         =>'user-kvhf2g4y'
        ));

        DB::table('entrega_b_s')->
        insert(array(
        'id'           =>'parteB-ky1z822p',
        'link'         =>'https://drive.google.com/file/d/1cnVhsoZ9gAYX9INy0FSwN7g4oFyjIzYY/view?usp=sharing',
        'fechaInicio'  =>'lunes, 10 de enero de 2022',
        'fechaCierre'  =>'sábado, 15 de enero de 2022',
        'estado'       =>'Activo',
        'user'         =>'user-kvhf2g4y'
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entrega_b_s');
    }
}
