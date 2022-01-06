<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->string('id', 30)->primary();
            $table->string('Iconolabel');
            $table->string('IconoIcono');
            $table->string('ItemLabel');
            $table->string('ItemIcono');
            $table->string('ItemTo');
            $table->string('estado');
            $table->timestamps();

            $table->string('rol'); 
            $table->foreign('rol')->references('id')->on('rols')->nullable()->onDelete('SET NULL');
        });

        DB::table('items')->
        insert(array(
        'id'           =>'items-kvhf2g4y',
        'Iconolabel'   =>'Home',
        'IconoIcono'   =>'pi pi-fw pi-home',
        'ItemLabel'    =>'Tablero',
        'ItemIcono'    =>'pi pi-fw pi-home',
        'ItemTo'       =>'/',
        'estado'       =>'Activo',
        'rol'          =>'rol-1as21sdfg'

        ));

        DB::table('items')->
        insert(array(
        'id'     =>'items-kvhf24j4',
        'Iconolabel'   =>'Home',
        'IconoIcono'   =>'pi pi-fw pi-home',
        'ItemLabel'    =>'Tablero',
        'ItemIcono'    =>'pi pi-fw pi-home',
        'ItemTo'       =>'/',
        'estado'       =>'Activo',
        'rol'          =>'rol-1as21sdfg'
        ));

        DB::table('items')->
        insert(array(
        'id'     =>'items-k5g62g4y',
        'Iconolabel'   =>'Gestion de Roles',
        'IconoIcono'   =>'pi pi-fw pi-sitemap',
        'ItemLabel'    =>'Roles',
        'ItemIcono'    =>'pi pi-fw pi-users',
        'ItemTo'       =>'/Role',
        'estado'       =>'Activo',
        'rol'          =>'rol-1as21sdfg'
        ));

        DB::table('items')->
        insert(array(
        'id'           =>'items-kvs72g4y',
        'Iconolabel'   =>'Gestion de Permisos',
        'IconoIcono'   =>'pi pi-fw pi-globe',
        'ItemLabel'    =>'Permisos',
        'ItemIcono'    =>'pi pi-fw pi-globe',
        'ItemTo'       =>'/Permiso',
        'estado'       =>'Activo',
        'rol'          =>'rol-1as21sdfg'
        ));

        DB::table('items')->
        insert(array(
        'id'           =>'items-ashf2g4y',
        'Iconolabel'   =>'Gestion de Usuario',
        'IconoIcono'   =>'pi pi-fw pi-sitemap',
        'ItemLabel'    =>'Usuarios',
        'ItemIcono'    =>'pi pi-fw pi-user',
        'ItemTo'       =>'/User',
        'estado'       =>'Activo',
        'rol'          =>'rol-1as21sdfg'
        ));

        DB::table('items')->
        insert(array(
        'id'           =>'items-trhf2g4y',
        'Iconolabel'   =>'Gestion de Empresa',
        'IconoIcono'   =>'pi pi-fw pi-briefcase',
        'ItemLabel'    =>'Empresas',
        'ItemIcono'    =>'pi pi-fw pi-briefcase',
        'ItemTo'       =>'/Empresa',
        'estado'       =>'Activo',
        'rol'          =>'rol-1as21sdfg'
        ));

        DB::table('items')->
        insert(array(
        'id'           =>'items-htyf2g4y',
        'Iconolabel'   =>'Gestion Publicacion Convocatoria',
        'IconoIcono'   =>'pi pi-fw pi-sitemap',
        'ItemLabel'    =>'Convocatoria',
        'ItemIcono'    =>'pi pi-fw pi-id-card',
        'ItemTo'       =>'Convocatoria',
        'estado'       =>'Activo',
        'rol'          =>'rol-1as21sdfg'
        ));

        DB::table('items')->
        insert(array(
        'id'           =>'items-okjf2g4y',
        'Iconolabel'   =>'Gestion Publicacion Pliego de Especificaciones',
        'IconoIcono'   =>'pi pi-fw pi-sitemap',
        'ItemLabel'    =>'Pliego de Especificaciones',
        'ItemIcono'    =>'pi pi-fw pi-check-square',
        'ItemTo'       =>'/PliegoEspecificacion',
        'estado'       =>'Activo',
        'rol'          =>'rol-1as21sdfg'
        ));

        DB::table('items')->
        insert(array(
        'id'           =>'items-gbnf2g4y',
        'Iconolabel'   =>'Gestion de Firma de Contrato',
        'IconoIcono'   =>'pi pi-fw pi-sitemap',
        'ItemLabel'    =>'Firma de contrato',
        'ItemIcono'    =>'pi pi-fw pi-id-card',
        'ItemTo'       =>'/Contrato',
        'estado'       =>'Activo',
        'rol'          =>'rol-1as21sdfg'
        ));

        DB::table('items')->
        insert(array(
        'id'           =>'items-bngf2g4y',
        'Iconolabel'   =>'Gestion de Orden de Cambio',
        'IconoIcono'   =>'pi pi-fw pi-sitemap',
        'ItemLabel'    =>'Orden de cambio',
        'ItemIcono'    =>'pi pi-fw pi-id-card',
        'ItemTo'       =>'/Orden',
        'estado'       =>'Activo',
        'rol'          =>'rol-1as21sdfg'
        ));

        DB::table('items')->
        insert(array(
        'id'           =>'items-qwx42g4y',
        'Iconolabel'   =>'Gestion de Plan de Pagos',
        'IconoIcono'   =>'pi pi-fw pi-sitemap',
        'ItemLabel'    =>'Plan de pagos',
        'ItemIcono'    =>'pi pi-fw pi-id-card',
        'ItemTo'       =>'/Plan',
        'estado'       =>'Activo',
        'rol'          =>'rol-1as21sdfg'
        ));

        DB::table('items')->
        insert(array(
        'id'           =>'items-csw3f6gu',
        'Iconolabel'   =>'Gestion de Entrega Parte A',
        'IconoIcono'   =>'pi pi-fw pi-sitemap',
        'ItemLabel'    =>'Parte A',
        'ItemIcono'    =>'pi pi-fw pi-id-card',
        'ItemTo'       =>'/ParteA',
        'estado'       =>'Activo',
        'rol'          =>'rol-1as21sdfg'
        ));

        DB::table('items')->
        insert(array(
        'id'           =>'items-kvftgdy',
        'Iconolabel'   =>'estion de Entrega Parte A',
        'IconoIcono'   =>'pi pi-fw pi-sitemap',
        'ItemLabel'    =>'Parte B',
        'ItemIcono'    =>'pi pi-fw pi-id-card',
        'ItemTo'       =>'/ParteB',
        'estado'       =>'Activo',
        'rol'          =>'rol-1as21sdfg'
        ));

        DB::table('items')->
        insert(array(
        'id'           =>'items-kvdqzyd4',
        'Iconolabel'   =>'Lista de empresas',
        'IconoIcono'   =>'i pi-fw pi-briefcase',
        'ItemLabel'    =>'Empresas',
        'ItemIcono'    =>'pi pi-fw pi-briefcase',
        'ItemTo'       =>'/ListEmpresa',
        'estado'       =>'Activo',
        'rol'          =>'rol-1as21sdfg'
        ));

        DB::table('items')->
        insert(array(
        'id'           =>'items-ogdw3k5c',
        'Iconolabel'   =>'Lista de Publicaciones Convocatorias',
        'IconoIcono'   =>'pi pi-fw pi-sitemap',
        'ItemLabel'    =>'Convocatoria',
        'ItemIcono'    =>'pi pi-fw pi-id-card',
        'ItemTo'       =>'/ListConvocatoria',
        'estado'       =>'Activo',
        'rol'          =>'rol-1as21sdfg'
        ));

        DB::table('items')->
        insert(array(
        'id'           =>'items-xe4d5gh6',
        'Iconolabel'   =>'Lista de Publicaciones Pliego de Especificaciones',
        'IconoIcono'   =>'pi pi-fw pi-sitemap',
        'ItemLabel'    =>'Pliego de Especificaciones',
        'ItemIcono'    =>'pi pi-fw pi-check-square',
        'ItemTo'       =>'/ListPliego',
        'estado'       =>'Activo',
        'rol'          =>'rol-1as21sdfg'
        ));

        DB::table('items')->
        insert(array(
        'id'           =>'items-xe4j8gh6',
        'Iconolabel'   =>'FORO DE DISCUSION',
        'IconoIcono'   =>'pi pi-fw pi-sitemap',
        'ItemLabel'    =>'Foro',
        'ItemIcono'    =>'pi pi-fw pi-users',
        'ItemTo'       =>'/Forum',
        'estado'       =>'Activo',
        'rol'          =>'rol-1as21sdfg'
        ));
        //-------- Usuario ------------------------

        DB::table('items')->
        insert(array(
        'id'     =>'items-kvhf2xsw',
        'Iconolabel'   =>'Home',
        'IconoIcono'   =>'pi pi-fw pi-home',
        'ItemLabel'    =>'Tablero',
        'ItemIcono'    =>'pi pi-fw pi-home',
        'ItemTo'       =>'/',
        'estado'       =>'Activo',
        'rol'          =>'rol-kvjva7f6'
        ));

        DB::table('items')->
        insert(array(
        'id'           =>'items-kvdqwed4',
        'Iconolabel'   =>'Lista de empresas',
        'IconoIcono'   =>'i pi-fw pi-briefcase',
        'ItemLabel'    =>'Empresas',
        'ItemIcono'    =>'pi pi-fw pi-briefcase',
        'ItemTo'       =>'/ListEmpresa',
        'estado'       =>'Activo',
        'rol'          =>'rol-kvjva7f6'
        ));

        DB::table('items')->
        insert(array(
        'id'           =>'items-ogfr3k5c',
        'Iconolabel'   =>'Lista de Publicaciones Convocatorias',
        'IconoIcono'   =>'pi pi-fw pi-sitemap',
        'ItemLabel'    =>'Convocatoria',
        'ItemIcono'    =>'pi pi-fw pi-id-card',
        'ItemTo'       =>'/ListConvocatoria',
        'estado'       =>'Activo',
        'rol'          =>'rol-kvjva7f6'
        ));

        DB::table('items')->
        insert(array(
        'id'           =>'items-xewq5gh6',
        'Iconolabel'   =>'Lista de Publicaciones Pliego de Especificaciones',
        'IconoIcono'   =>'pi pi-fw pi-sitemap',
        'ItemLabel'    =>'Pliego de Especificaciones',
        'ItemIcono'    =>'pi pi-fw pi-check-square',
        'ItemTo'       =>'/ListPliego',
        'estado'       =>'Activo',
        'rol'          =>'rol-kvjva7f6'
        ));

        //-------- Docente ------------------------

        DB::table('items')->
        insert(array(
        'id'     =>'items-u7hf2xsw',
        'Iconolabel'   =>'Home',
        'IconoIcono'   =>'pi pi-fw pi-home',
        'ItemLabel'    =>'Tablero',
        'ItemIcono'    =>'pi pi-fw pi-home',
        'ItemTo'       =>'/',
        'estado'       =>'Activo',
        'rol'          =>'rol-21sd3dgrf'
        ));

        DB::table('items')->
        insert(array(
        'id'           =>'items-v7dqwed4',
        'Iconolabel'   =>'Lista de empresas',
        'IconoIcono'   =>'i pi-fw pi-briefcase',
        'ItemLabel'    =>'Empresas',
        'ItemIcono'    =>'pi pi-fw pi-briefcase',
        'ItemTo'       =>'/ListEmpresa',
        'estado'       =>'Activo',
        'rol'          =>'rol-21sd3dgrf'
        ));

        DB::table('items')->
        insert(array(
        'id'           =>'items-l0fr3k5c',
        'Iconolabel'   =>'Lista de Publicaciones Convocatorias',
        'IconoIcono'   =>'pi pi-fw pi-sitemap',
        'ItemLabel'    =>'Convocatoria',
        'ItemIcono'    =>'pi pi-fw pi-id-card',
        'ItemTo'       =>'/ListConvocatoria',
        'estado'       =>'Activo',
        'rol'          =>'rol-21sd3dgrf'
        ));

        DB::table('items')->
        insert(array(
        'id'           =>'items-b5wq5gh6',
        'Iconolabel'   =>'Lista de Publicaciones Pliego de Especificaciones',
        'IconoIcono'   =>'pi pi-fw pi-sitemap',
        'ItemLabel'    =>'Pliego de Especificaciones',
        'ItemIcono'    =>'pi pi-fw pi-check-square',
        'ItemTo'       =>'/ListPliego',
        'estado'       =>'Activo',
        'rol'          =>'rol-21sd3dgrf'
        ));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
