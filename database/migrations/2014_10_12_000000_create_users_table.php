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
        'id'       =>'user-ss12qswe',
        'nombre'   =>'Cesar',
        'apellido' =>'Galindo',
        'email'    =>'cesar.g@gmail.com',
        'password' =>'123456',
        'rol'      =>'rol-1as21sdfg'
        ));
        DB::table('users')->
        insert(array(
        'id'       =>'user-sad15aew',
        'nombre'   =>'Ariel',
        'apellido' =>'Paricagua',
        'email'    =>'ariel.p@gmail.com',
        'password' =>'123456',
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
