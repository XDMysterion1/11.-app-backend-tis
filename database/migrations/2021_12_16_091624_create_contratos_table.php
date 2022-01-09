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
        DB::table('contratos')->
        insert(array(
        'id'                  =>'cont-kxyss4l2',
        'fecha'               =>'jueves, 13 de enero de 2022',
        'codigoConvocatoria'  =>'PETIS-1515',
        'codigoPliego'        =>'PETIS-1309-2021',
        'estado'              =>'Activo',
        'empresa'             =>'empresa-kwa2640y',
        'user'                =>'user-xchf2g4y'
        ));
        DB::table('contratos')->
        insert(array(
        'id'                  =>'cont-ky225rwf',
        'fecha'               =>'miércoles, 5 de enero de 2022',
        'codigoConvocatoria'  =>'PETIS-1515',
        'codigoPliego'        =>'PETIS-1409-2021',
        'estado'              =>'Activo',
        'empresa'             =>'empresa-ky21kz9v',
        'user'                =>'user-xchf2g4y'
        ));
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
