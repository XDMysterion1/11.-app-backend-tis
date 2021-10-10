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
            $table->id();
            $table->string('codigoSIS');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('direccion');
            $table->string('telefono');
            $table->string('gestion');
            $table->string('sexo');
            $table->timestamps();

            $table->unsignedInteger('rol'); 
            $table->foreign('rol')->references('id')->on('rols');
        });
        DB::table('users')->
        insert(array(
        'id'       =>'1',
        'codigoSIS'=>'202005412',
        'nombre'   =>'Cesar',
        'apellido' =>'Galindo',
        'email'    =>'cesar.g@gmail.com',
        'password' =>'123456',
        'direccion'=>'Sacaba',
        'telefono' =>'75458565',
        'gestion'  =>'I-2021',
        'sexo'     =>'Masculino',
        'rol'      =>'1'
        ));
        DB::table('users')->
        insert(array(
        'id'       =>'2',
        'codigoSIS'=>'202105412',
        'nombre'   =>'Ariel',
        'apellido' =>'Paricagua',
        'email'    =>'ariel.p@gmail.com',
        'password' =>'123456',
        'direccion'=>'Quillacollo',
        'telefono' =>'75458458',
        'gestion'  =>'I-2021',
        'sexo'     =>'Masculino',
        'rol'      =>'2'
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
