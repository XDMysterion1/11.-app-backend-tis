<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->string('id', 30)->primary();
            $table->string('fecha');
            $table->string('codigoConvocatoria');
            $table->string('codigoPliego');
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
        Schema::dropIfExists('contratos');
    }
}
