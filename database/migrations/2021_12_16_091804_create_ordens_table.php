<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordens', function (Blueprint $table) {
            $table->string('id', 30)->primary();
            $table->string('fecha');
            $table->string('caratulaA'           ,256);
            $table->string('indiceA'             ,256);
            $table->string('cartaA'              ,512);
            $table->string('boletaA'             ,512);
            $table->string('conformacionA'       ,512);
            $table->string('solvenciaA'          ,512);

            $table->string('caratulaB'           ,256);
            $table->string('indiceB'             ,256);
            $table->string('propuestaServicioB'  ,512);
            $table->string('planificacionB'      ,512);
            $table->string('propuestaEconomicaB' ,512);
            $table->string('planPagosB'          ,512);

            $table->string('cumplimientoProponente' ,10);
            $table->string('claridadOrganizacion'   ,10);
            $table->string('cumplimientoTecnico'    ,10);
            $table->string('claridadProceso'        ,10);
            $table->string('plazosEjecucion'        ,10);
            $table->string('precioTotal'            ,10);
            $table->string('usoHerramienta'         ,10);

            $table->string('estado');

            $table->timestamps();

            $table->string('empresa'); 
            $table->foreign('empresa')->references('id')->on('empresas')->nullable()->onDelete('SET NULL');

            $table->string('user'); 
            $table->foreign('user')->references('id')->on('users')->nullable()->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordens');
    }
}
