<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->string('id', 30)->primary();
            $table->string('nombre');
            $table->string('nombreCorto');
            $table->string('nombreLargo');
            $table->string('tipoSociedad');
            $table->string('direccion');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('informacion',255);
            $table->string('estado');
            $table->timestamps();

            $table->string('user'); 
            $table->foreign('user')->references('id')->on('users')->nullable()->onDelete('SET NULL');
        });
        DB::table('empresas')->
        insert(array(
        'id'            =>'empresa-kwa2640y',
        'nombre'        =>'Magic Tech',
        'nombreCorto'   =>'Magic',
        'nombreLargo'   =>'Magic Tech Software',
        'tipoSociedad'  =>'S.R.L.',
        'direccion'     =>'AV. 16 de julio entre Heroinas',
        'email'         =>'magictech1@gmail.com',
        'password'      =>'123456',
        'informacion'   =>'Especialisados en software',
        'estado'        =>'Activo',
        'user'          =>'user-ss12qswe'
        ));
        DB::table('empresas')->
        insert(array(
        'id'            =>'empresa-kwarin4p',
        'nombre'        =>'Liontech',
        'nombreCorto'   =>'Lion',
        'nombreLargo'   =>'liontech Soft',
        'tipoSociedad'  =>'S.R.L.',
        'direccion'     =>'Av. heroinas y Av. san martin',
        'email'         =>'liontech@gmail.com',
        'password'      =>'liontech12345',
        'informacion'   =>'Es una empresa encargada del desarrollo del software',
        'estado'        =>'Activo',
        'user'          =>'user-kvhf2g4y'
        ));
        DB::table('empresas')->
        insert(array(
        'id'            =>'empresa-kwu4ehp5',
        'nombre'        =>'Alfa Soft',
        'nombreCorto'   =>'Alfa',
        'nombreLargo'   =>'Alfa Software',
        'tipoSociedad'  =>'S.R.L.',
        'direccion'     =>'Av Los pinos del Alto',
        'email'         =>'alfa.soft@gmail.com',
        'password'      =>'123456',
        'informacion'   =>'Empresa de desarrollo de software',
        'estado'        =>'Activo',
        'user'          =>'user-kvigul61'
        ));
        DB::table('empresas')->
        insert(array(
        'id'            =>'empresa-kwu2nhve',
        'nombre'        =>'Pablo',
        'nombreCorto'   =>'SQ',
        'nombreLargo'   =>'Software Of Quality',
        'tipoSociedad'  =>'S.R.L.',
        'direccion'     =>'Av. America entre Quijarro y Pantaleon Dalence 123',
        'email'         =>'SQ@gmail.com.com',
        'password'      =>'123123',
        'informacion'   =>'Ninguna',
        'estado'        =>'Activo',
        'user'          =>'user-kvq1z5do'
        ));
        DB::table('empresas')->
        insert(array(
        'id'            =>'empresa-kwu3hc19',
        'nombre'        =>'Lulu',
        'nombreCorto'   =>'rvgc',
        'nombreLargo'   =>'RVGC Soft',
        'tipoSociedad'  =>'S.R.L.',
        'direccion'     =>'Calle Ignacio de las Casa 123',
        'email'         =>'rvgc@gmail.com',
        'password'      =>'...123',
        'informacion'   =>'empresa de software',
        'estado'        =>'Activo',
        'user'          =>'user-kvq1z5do'
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}
