<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->string('id', 30)->primary();
            $table->string('link',500);
            $table->string('estado');
            $table->timestamps();

            $table->string('user'); 
            $table->foreign('user')->references('id')->on('users')->nullable()->onDelete('SET NULL');
        });
        
        DB::table('plans')->
        insert(array(
        'id'       =>'plan-kxaoui9m',
        'link'     =>'https://es.reactjs.org/',
        'estado'   =>'Activo',
        'user'     =>'user-xchf2g4y'
        ));

        DB::table('plans')->
        insert(array(
        'id'       =>'plan-kxjo86qp',
        'link'     =>'https://app.qase.io/project/MT?view=1&suite=8',
        'estado'   =>'Activo',
        'user'     =>'user-xchf2g4y'
        ));

        DB::table('plans')->
        insert(array(
        'id'       =>'plan-kxoqorln',
        'link'     =>'https://docs.google.com/document/d/12bS1n3ITXgRhhehFTVg0L8yWHijI1vWUQFaSRSN9_x0/edit#',
        'estado'   =>'Activo',
        'user'     =>'user-xchf2g4y'
        ));

        DB::table('plans')->
        insert(array(
        'id'       =>'plan-kxortk0f',
        'link'     =>'https://docs.google.com/document/d/12bS1n3ITXgRhhehFTVg0L8yWHijI1vWUQFaSRSN9_x0/edit#heading=h.lpby612xwugx',
        'estado'   =>'Activo',
        'user'     =>'user-xchf2g4y'
        ));

        DB::table('plans')->
        insert(array(
        'id'       =>'plan-ky1z4w35',
        'link'     =>'https://drive.google.com/file/d/1cnVhsoZ9gAYX9INy0FSwN7g4oFyjIzYY/view?usp=sharing',
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
        Schema::dropIfExists('plans');
    }
}
