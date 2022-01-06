<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConvocatoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('convocatorias', function (Blueprint $table) {
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
        DB::table('convocatorias')->
        insert(array(
        'id'       =>'conv-kwa3x7iu',
        'titulo'   =>'Convocatoria',
        'codigo'   =>'PETIS-1515',
        'semestre' =>'II-2021',
        'link'     =>'https://docs.google.com/document/d/1QKxn8wD9fUICAttp7Sc378rM4VSqzIWUltd0PSToFBw/edit',
        'publicado'=>'No publicar',
        'estado'   =>'Activo',
        'user'     =>'user-ky21qd29'
        ));

        DB::table('convocatorias')->
        insert(array(
        'id'       =>'conv-kwhctzbo',
        'titulo'   =>'Empresa TIS',
        'codigo'   =>'CPTIS-0509-2021',
        'semestre' =>'II-2021',
        'link'     =>'https://drive.google.com/file/d/1SYMYNX-7WNjMwBNHIW_KRMqJks_Z1xcC/view?usp=sharing',
        'publicado'=>'No publicar',
        'estado'   =>'Activo',
        'user'     =>'user-ky21qd29'
        ));

        DB::table('convocatorias')->
        insert(array(
        'id'       =>'conv-kwhcukim',
        'titulo'   =>'Empresa TIS',
        'codigo'   =>'CPTIS-0609-2021',
        'semestre' =>'II-2021',
        'link'     =>'https://drive.google.com/file/d/1SYMYNX-7WNjMwBNHIW_KRMqJks_Z1xcC/view?usp=sharing',
        'publicado'=>'No publicar',
        'estado'   =>'Activo',
        'user'     =>'user-ky21qd29'
        ));

        DB::table('convocatorias')->
        insert(array(
        'id'       =>'conv-kwu432nm',
        'titulo'   =>'CPTIS',
        'codigo'   =>'CPTIS-0508-2021',
        'semestre' =>'II-2021',
        'link'     =>'https://drive.google.com/drive/u/0/folders/120iQOwmWHY6ClFl8dG8xcZeQ1h7Kar_c',
        'publicado'=>'No publicar',
        'estado'   =>'Activo',
        'user'     =>'user-kwks5frw'
        ));
        DB::table('convocatorias')->
        insert(array(
        'id'       =>'conv-ky221wm1',
        'titulo'   =>'Primera publicacion',
        'codigo'   =>'CPTIS-0509',
        'semestre' =>'II-2021',
        'link'     =>'https://docs.google.com/document/d/1p2qlQefERvPSnB6qBnr8lTxoUDzvknMqi_OmiYOG3Tg/edit#',
        'publicado'=>'No publicar',
        'estado'   =>'Activo',
        'user'     =>'user-kwks5frw'
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('convocatorias');
    }
}
