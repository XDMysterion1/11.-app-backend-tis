<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePliegosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pliegos', function (Blueprint $table) {
            $table->string('id', 30)->primary();
            $table->string('titulo');
            $table->string('codigo');
            $table->string('semestre');
            $table->string('link',500);
            $table->string('publicado');
            $table->string('estado');
            $table->timestamps();

            $table->string('user'); 
            $table->foreign('user')->references('id')->on('users')->nullable()->onDelete('SET NULL');
        });
        DB::table('pliegos')->
        insert(array(
        'id'       =>'plieg-kw9zux5z',
        'titulo'   =>'Pliego de Especificaciones',
        'codigo'   =>'pliego-062021',
        'semestre' =>'II-2021',
        'link'     =>'https://docs.google.com/document/d/1QKxn8wD9fUICAttp7Sc378rM4VSqzIWUltd0PSToFBw/edit?usp=sharing',
        'publicado'=>'No publicar',
        'estado'   =>'Activo',
        'user'     =>'user-xchf2g4y'
        ));

        DB::table('pliegos')->
        insert(array(
        'id'       =>'plieg-kwhc5y0b',
        'titulo'   =>'Empresa TIS',
        'codigo'   =>'PETIS-1309-2021',
        'semestre' =>'II-2021',
        'link'     =>'https://drive.google.com/file/d/1cnVhsoZ9gAYX9INy0FSwN7g4oFyjIzYY/view?usp=sharing',
        'publicado'=>'Publicar',
        'estado'   =>'Activo',
        'user'     =>'user-xchf2g4y'
        ));

        DB::table('pliegos')->
        insert(array(
        'id'       =>'plieg-kwhcjpq7',
        'titulo'   =>'Empresa TIS',
        'codigo'   =>'PETIS-1409-2021',
        'semestre' =>'II-2021',
        'link'     =>'https://drive.google.com/file/d/1cnVhsoZ9gAYX9INy0FSwN7g4oFyjIzYY/view?usp=sharing',
        'publicado'=>'Publicar',
        'estado'   =>'Activo',
        'user'     =>'user-xchf2g4y'
        ));

        DB::table('pliegos')->
        insert(array(
        'id'       =>'plieg-kwu4wsqc',
        'titulo'   =>'PETIS',
        'codigo'   =>'CPTIS-0509-2021',
        'semestre' =>'II-2021',
        'link'     =>'https://drive.google.com/drive/u/0/folders/120iQOwmWHY6ClFl8dG8xcZeQ1h7Kar_c',
        'publicado'=>'Publicar',
        'estado'   =>'Activo',
        'user'     =>'user-xchf2g4y'
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pliegos');
    }
}
