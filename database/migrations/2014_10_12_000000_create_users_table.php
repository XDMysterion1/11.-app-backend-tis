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
            $table->string('estado');
            $table->rememberToken();
            $table->timestamps();

            $table->string('rol'); 
            $table->foreign('rol')->references('id')->on('rols')->nullable()->onDelete('SET NULL');
        });
        DB::table('users')->
        insert(array(
        'id'       =>'user-xchf2g4y',
        'nombre'   =>'Magic',
        'apellido' =>'Tech',
        'email'    =>'admin@gmail.com',
        'password' =>'123456',
        'estado'   =>'Activo',
        'rol'      =>'rol-1as21sdfg'
        ));

        DB::table('users')->
        insert(array(
        'id'       =>'user-kvhf2g4y',
        'nombre'   =>'Ariel',
        'apellido' =>'Paricagua',
        'email'    =>'ariel.pv@gmail.com',
        'password' =>'123456',
        'estado'   =>'Activo',
        'rol'      =>'rol-ky3hq0kb'
        ));
        DB::table('users')->
        insert(array(
        'id'       =>'user-kvigul61',
        'nombre'   =>'Antonio',
        'apellido' =>'Roman Marca',
        'email'    =>'antonio.a@gmail.com',
        'password' =>'123456',
        'estado'   =>'Activo',
        'rol'      =>'rol-ky3hq0kb'
        ));
        DB::table('users')->
        insert(array(
        'id'       =>'user-ss12qswe',
        'nombre'   =>'Cesar',
        'apellido' =>'Galindo',
        'email'    =>'cesar.g@gmail.com',
        'password' =>'123456',
        'estado'   =>'Activo',
        'rol'      =>'rol-ky3hq0kb'
        ));
        DB::table('users')->
        insert(array(
        'id'       =>'user-kvor9jr5',
        'nombre'   =>'Denisse',
        'apellido' =>'Vargas',
        'email'    =>'denisv@gmail.com',
        'password' =>'123456',
        'estado'   =>'Activo',
        'rol'      =>'rol-ky3hq0kb'
        ));
        DB::table('users')->
        insert(array(
        'id'       =>'user-kvok0fcb',
        'nombre'   =>'Alex',
        'apellido' =>'Calcina',
        'email'    =>'alex@gmail.com',
        'password' =>'123456',
        'estado'   =>'Activo',
        'rol'      =>'rol-ky3hq0kb'
        ));
        DB::table('users')->
        insert(array(
        'id'       =>'user-kwwn9wse',
        'nombre'   =>'Flabio',
        'apellido' =>'Vargas',
        'email'    =>'flabio@gmail.com',
        'password' =>'123abc',
        'estado'   =>'Activo',
        'rol'      =>'rol-ky3hq0kb'
        ));

        DB::table('users')->
        insert(array(
        'id'       =>'user-ky21qd29',
        'nombre'   =>'Jorge',
        'apellido' =>'Perez',
        'email'    =>'pepe@gmail.com',
        'password' =>'jorge123',
        'estado'   =>'Activo',
        'rol'      =>'rol-1as21sdfg'
        ));

        DB::table('users')->
        insert(array(
        'id'       =>'user-ky22l535',
        'nombre'   =>'Corina',
        'apellido' =>'Flores Villarroel',
        'email'    =>'corinaflores.v@fcyt.umss.edu.bo',
        'password' =>'corina123',
        'estado'   =>'Activo',
        'rol'      =>'rol-21sd3dgrf'
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
