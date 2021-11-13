<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('id', 30)->primary();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->string('rol'); 
            $table->foreign('rol')->references('id')->on('rols')->nullable()->onDelete('SET NULL');
        });
        DB::table('users')->
        insert(array(
        'id'       =>'user-kvhf2g4y',
        'nombre'   =>'Ariel',
        'apellido' =>'Paricagua',
        'email'    =>'ariel.pv@gmail.com',
        'password' =>'123456',
        'rol'      =>'rol-3dsd33wff'
        ));
        DB::table('users')->
        insert(array(
        'id'       =>'user-kvigul61',
        'nombre'   =>'Antonio',
        'apellido' =>'Roman Marca',
        'email'    =>'antonio.a@gmail.com',
        'password' =>'Antonio123',
        'rol'      =>'rol-3dsd33wff'
        ));
        DB::table('users')->
        insert(array(
        'id'       =>'user-ss12qswe',
        'nombre'   =>'Cesar',
        'apellido' =>'Galindo',
        'email'    =>'cesar.g@gmail.com',
        'password' =>'1234123',
        'rol'      =>'rol-kv5cngnu'
        ));
        DB::table('users')->
        insert(array(
        'id'       =>'user-kvor9jr5',
        'nombre'   =>'Denisse',
        'apellido' =>'Vargas',
        'email'    =>'denisv@gmail.com',
        'password' =>'qwert123Q',
        'rol'      =>'rol-kvjva7f6'
        ));
        DB::table('users')->
        insert(array(
        'id'       =>'user-kvok0fcb',
        'nombre'   =>'Alex',
        'apellido' =>'Calcina',
        'email'    =>'alex@gmail.com',
        'password' =>'ALEX2021',
        'rol'      =>'rol-kvjva7f6'
        ));
        DB::table('users')->
        insert(array(
        'id'       =>'user-kvnubbyu',
        'nombre'   =>'Wilder',
        'apellido' =>'Canaviri',
        'email'    =>'wilder.c@gmail.com',
        'password' =>'123456',
        'rol'      =>'rol-kvjva7f6'
        ));
        DB::table('users')->
        insert(array(
        'id'       =>'user-kvq1x9hx',
        'nombre'   =>'Martha',
        'apellido' =>'Lagos',
        'email'    =>'martha.l@gmail.com',
        'password' =>'123456',
        'rol'      =>'rol-kvjva7f6'
        ));
        DB::table('users')->
        insert(array(
        'id'       =>'user-kvq1z5do',
        'nombre'   =>'Luz',
        'apellido' =>'Torres',
        'email'    =>'luz.t@gmail.com',
        'password' =>'123456',
        'rol'      =>'rol-kvjva7f6'
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
