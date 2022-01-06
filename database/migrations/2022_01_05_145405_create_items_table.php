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

            $table->string('homelabel');
            $table->string('homeIcono');
            $table->string('homeItemLabel');
            $table->string('homeItemIcono');
            $table->string('homeItemTo');

            $table->string('rolelabel');
            $table->string('roleIcono');
            $table->string('roleItemLabel');
            $table->string('roleItemIcono');
            $table->string('roleItemTo');

            $table->string('itemlabel');
            $table->string('itemIcono');
            $table->string('itemItemLabel');
            $table->string('itemItemIcono');
            $table->string('itemItemTo');

            $table->string('userlabel');
            $table->string('userIcono');
            $table->string('userItemLabel');
            $table->string('userItemIcono');
            $table->string('userItemTo');

            $table->string('empresalabel');
            $table->string('empresaIcono');
            $table->string('empresaItemLabel');
            $table->string('empresaItemIcono');
            $table->string('empresaItemTo');

            $table->string('convocatorialabel');
            $table->string('convocatoriaIcono');
            $table->string('convocatoriaItemLabel');
            $table->string('convocatoriaItemIcono');
            $table->string('convocatoriaItemTo');

            $table->string('pliegolabel');
            $table->string('pliegoIcono');
            $table->string('pliegoItemLabel');
            $table->string('pliegoItemIcono');
            $table->string('pliegoItemTo');

            $table->string('contratolabel');
            $table->string('contratoIcono');
            $table->string('contratoItemLabel');
            $table->string('contratoItemIcono');
            $table->string('contratoItemTo');

            $table->string('ordenlabel');
            $table->string('ordenIcono');
            $table->string('ordenItemLabel');
            $table->string('ordenItemIcono');
            $table->string('ordenItemTo');

            $table->string('planlabel');
            $table->string('planIcono');
            $table->string('planItemLabel');
            $table->string('planItemIcono');
            $table->string('planItemTo');

            $table->string('parteAlabel');
            $table->string('parteAIcono');
            $table->string('parteAItemLabel');
            $table->string('parteAItemIcono');
            $table->string('parteAItemTo');

            $table->string('parteBlabel');
            $table->string('parteBIcono');
            $table->string('parteBItemLabel');
            $table->string('parteBItemIcono');
            $table->string('parteBItemTo');

            $table->string('listEmpresalabel');
            $table->string('listEmpresaIcono');
            $table->string('listEmpresaItemLabel');
            $table->string('listEmpresaItemIcono');
            $table->string('listEmpresaItemTo');

            $table->string('listConvlabel');
            $table->string('listConvIcono');
            $table->string('listConvItemLabel');
            $table->string('listConvItemIcono');
            $table->string('listConvItemTo');

            $table->string('listPliegolabel');
            $table->string('listPliegoIcono');
            $table->string('listPliegoItemLabel');
            $table->string('listPliegoItemIcono');
            $table->string('listPliegoItemTo');

            $table->string('foroIcono');
            $table->string('forolabel');
            $table->string('foroItemLabel');
            $table->string('foroItemIcono');
            $table->string('foroItemTo');
            

            $table->string('estado');
            $table->timestamps();

            $table->string('rol'); 
            $table->foreign('rol')->references('id')->on('rols')->nullable()->onDelete('SET NULL');
        });

        // ----------------- Administrador---------------------
        DB::table('items')->
        insert(array(
        'id'                    =>'items-kvhf2g4y',
        'homelabel'             =>'Home',
        'homeIcono'             =>'pi pi-fw pi-home',
        'homeItemLabel'         =>'Tablero',
        'homeItemIcono'         =>'pi pi-fw pi-home',
        'homeItemTo'            =>'/',

        'rolelabel'             =>'Gestion de Roles',
        'roleIcono'             =>'pi pi-fw pi-sitemap',
        'roleItemLabel'         =>'Roles',
        'roleItemIcono'         =>'pi pi-fw pi-users',
        'roleItemTo'            =>'/Role',

        'itemlabel'             =>'Gestion de Permisos',
        'itemIcono'             =>'pi pi-fw pi-globe',
        'itemItemLabel'         =>'Permisos',
        'itemItemIcono'         =>'pi pi-fw pi-globe',
        'itemItemTo'            =>'/Permiso',

        'userlabel'             =>'Gestion de Usuario',
        'userIcono'             =>'pi pi-fw pi-sitemap',
        'userItemLabel'         =>'Usuarios',
        'userItemIcono'         =>'pi pi-fw pi-user',
        'userItemTo'            =>'/User',

        'empresalabel'          =>'Gestion de Empresa',
        'empresaIcono'          =>'pi pi-fw pi-briefcase',
        'empresaItemLabel'      =>'Empresas',
        'empresaItemIcono'      =>'pi pi-fw pi-briefcase',
        'empresaItemTo'         =>'/Empresa',

        'convocatorialabel'     =>'Gestion Publicacion Convocatoria',
        'convocatoriaIcono'     =>'pi pi-fw pi-sitemap',
        'convocatoriaItemLabel' =>'Convocatoria',
        'convocatoriaItemIcono' =>'pi pi-fw pi-id-card',
        'convocatoriaItemTo'    =>'/Convocatoria',

        'pliegolabel'           =>'Gestion Publicacion Pliego de Especificaciones',
        'pliegoIcono'           =>'pi pi-fw pi-sitemap',
        'pliegoItemLabel'       =>'Pliego de Especificaciones',
        'pliegoItemIcono'       =>'pi pi-fw pi-check-square',
        'pliegoItemTo'          =>'/PliegoEspecificacion',

        'contratolabel'         =>'Gestion de Firma de Contrato',
        'contratoIcono'         =>'pi pi-fw pi-sitemap',
        'contratoItemLabel'     =>'Firma de contrato',
        'contratoItemIcono'     =>'pi pi-fw pi-id-card',
        'contratoItemTo'        =>'/Contrato',

        'ordenlabel'            =>'Gestion de Orden de Cambio',
        'ordenIcono'            =>'pi pi-fw pi-sitemap',
        'ordenItemLabel'        =>'Orden de cambio',
        'ordenItemIcono'        =>'pi pi-fw pi-id-card',
        'ordenItemTo'           =>'/Orden',

        'planlabel'             =>'Gestion de Plan de Pagos',
        'planIcono'             =>'pi pi-fw pi-sitemap',
        'planItemLabel'         =>'Plan de pagos',
        'planItemIcono'         =>'pi pi-fw pi-id-card',
        'planItemTo'            =>'/Plan',

        'parteAlabel'           =>'Gestion de Entrega Parte A',
        'parteAIcono'           =>'pi pi-fw pi-sitemap',
        'parteAItemLabel'       =>'Parte A',
        'parteAItemIcono'       =>'pi pi-fw pi-id-card',
        'parteAItemTo'          =>'/ParteA',

        'parteBlabel'           =>'Gestion de Entrega Parte B',
        'parteBIcono'           =>'pi pi-fw pi-sitemap',
        'parteBItemLabel'       =>'Parte B',
        'parteBItemIcono'       =>'pi pi-fw pi-id-card',
        'parteBItemTo'          =>'/ParteB',

        'listEmpresalabel'      =>'Lista de empresas',
        'listEmpresaIcono'      =>'pi pi-fw pi-briefcase',
        'listEmpresaItemLabel'  =>'Empresas',
        'listEmpresaItemIcono'  =>'pi pi-fw pi-briefcase',
        'listEmpresaItemTo'     =>'/ListEmpresa',

        'listConvlabel'         =>'Lista de Publicaciones Convocatorias',
        'listConvIcono'         =>'pi pi-fw pi-sitemap',
        'listConvItemLabel'     =>'Convocatoria',
        'listConvItemIcono'     =>'pi pi-fw pi-id-card',
        'listConvItemTo'        =>'/ListConvocatoria',

        'listPliegolabel'       =>'Lista de Publicaciones Pliego de Especificaciones',
        'listPliegoIcono'       =>'pi pi-fw pi-sitemap',
        'listPliegoItemLabel'   =>'Pliego de Especificaciones',
        'listPliegoItemIcono'   =>'pi pi-fw pi-check-square',
        'listPliegoItemTo'      =>'/ListPliego',

        'foroIcono'             =>'FORO DE DISCUSION',
        'forolabel'             =>'pi pi-fw pi-sitemap',
        'foroItemLabel'         =>'Foro',
        'foroItemIcono'         =>'pi pi-fw pi-users',
        'foroItemTo'            =>'/Forum',

        'estado'                =>'Activo',
        'rol'                   =>'rol-1as21sdfg'

        ));

        //------------------Usuario------------------------------------------------

        DB::table('items')->
        insert(array(
        'id'                    =>'items-xshf2g4y',
        'homelabel'             =>'Home',
        'homeIcono'             =>'pi pi-fw pi-home',
        'homeItemLabel'         =>'Tablero',
        'homeItemIcono'         =>'pi pi-fw pi-home',
        'homeItemTo'            =>'/',

        'rolelabel'             =>'',
        'roleIcono'             =>'',
        'roleItemLabel'         =>'',
        'roleItemIcono'         =>'',
        'roleItemTo'            =>'',

        'itemlabel'             =>'',
        'itemIcono'             =>'',
        'itemItemLabel'         =>'',
        'itemItemIcono'         =>'',
        'itemItemTo'            =>'',


        'userlabel'             =>'',
        'userIcono'             =>'',
        'userItemLabel'         =>'',
        'userItemIcono'         =>'',
        'userItemTo'            =>'',

        'empresalabel'          =>'',
        'empresaIcono'          =>'',
        'empresaItemLabel'      =>'',
        'empresaItemIcono'      =>'',
        'empresaItemTo'         =>'',

        'convocatorialabel'     =>'',
        'convocatoriaIcono'     =>'',
        'convocatoriaItemLabel' =>'',
        'convocatoriaItemIcono' =>'',
        'convocatoriaItemTo'    =>'',

        'pliegolabel'           =>'',
        'pliegoIcono'           =>'',
        'pliegoItemLabel'       =>'',
        'pliegoItemIcono'       =>'',
        'pliegoItemTo'          =>'',

        'contratolabel'         =>'',
        'contratoIcono'         =>'',
        'contratoItemLabel'     =>'',
        'contratoItemIcono'     =>'',
        'contratoItemTo'        =>'',

        'ordenlabel'            =>'',
        'ordenIcono'            =>'',
        'ordenItemLabel'        =>'',
        'ordenItemIcono'        =>'',
        'ordenItemTo'           =>'',

        'planlabel'             =>'',
        'planIcono'             =>'',
        'planItemLabel'         =>'',
        'planItemIcono'         =>'',
        'planItemTo'            =>'',

        'parteAlabel'           =>'',
        'parteAIcono'           =>'',
        'parteAItemLabel'       =>'',
        'parteAItemIcono'       =>'',
        'parteAItemTo'          =>'',

        'parteBlabel'           =>'',
        'parteBIcono'           =>'',
        'parteBItemLabel'       =>'',
        'parteBItemIcono'       =>'',
        'parteBItemTo'          =>'',

        'listEmpresalabel'      =>'Lista de empresas',
        'listEmpresaIcono'      =>'i pi-fw pi-briefcase',
        'listEmpresaItemLabel'  =>'Empresas',
        'listEmpresaItemIcono'  =>'pi pi-fw pi-briefcase',
        'listEmpresaItemTo'     =>'/ListEmpresa',

        'listConvlabel'         =>'Lista de Publicaciones Convocatorias',
        'listConvIcono'         =>'pi pi-fw pi-sitemap',
        'listConvItemLabel'     =>'Convocatoria',
        'listConvItemIcono'     =>'pi pi-fw pi-id-card',
        'listConvItemTo'        =>'/ListConvocatoria',

        'listPliegolabel'       =>'Lista de Publicaciones Pliego de Especificaciones',
        'listPliegoIcono'       =>'pi pi-fw pi-sitemap',
        'listPliegoItemLabel'   =>'Pliego de Especificaciones',
        'listPliegoItemIcono'   =>'pi pi-fw pi-check-square',
        'listPliegoItemTo'      =>'/ListPliego',

        'foroIcono'             =>'',
        'forolabel'             =>'',
        'foroItemLabel'         =>'',
        'foroItemIcono'         =>'',
        'foroItemTo'            =>'',

        'estado'                =>'Activo',
        'rol'                   =>'rol-kvjva7f6'

        ));

        DB::table('items')->
        insert(array(
        'id'                    =>'items-gxhf2g4y',
        'homelabel'             =>'Home',
        'homeIcono'             =>'pi pi-fw pi-home',
        'homeItemLabel'         =>'Tablero',
        'homeItemIcono'         =>'pi pi-fw pi-home',
        'homeItemTo'            =>'/',

        'rolelabel'             =>'',
        'roleIcono'             =>'',
        'roleItemLabel'         =>'',
        'roleItemIcono'         =>'',
        'roleItemTo'            =>'',

        'itemlabel'             =>'',
        'itemIcono'             =>'',
        'itemItemLabel'         =>'',
        'itemItemIcono'         =>'',
        'itemItemTo'            =>'',


        'userlabel'             =>'Gestion de Usuario',
        'userIcono'             =>'pi pi-fw pi-sitemap',
        'userItemLabel'         =>'Usuarios',
        'userItemIcono'         =>'pi pi-fw pi-user',
        'userItemTo'            =>'/User',

        'empresalabel'          =>'Gestion de Empresa',
        'empresaIcono'          =>'pi pi-fw pi-briefcase',
        'empresaItemLabel'      =>'Empresas',
        'empresaItemIcono'      =>'pi pi-fw pi-briefcase',
        'empresaItemTo'         =>'/Empresa',

        'convocatorialabel'     =>'Gestion Publicacion Convocatoria',
        'convocatoriaIcono'     =>'pi pi-fw pi-sitemap',
        'convocatoriaItemLabel' =>'Convocatoria',
        'convocatoriaItemIcono' =>'pi pi-fw pi-id-card',
        'convocatoriaItemTo'    =>'/Convocatoria',

        'pliegolabel'           =>'Gestion Publicacion Pliego de Especificaciones',
        'pliegoIcono'           =>'pi pi-fw pi-sitemap',
        'pliegoItemLabel'       =>'Pliego de Especificaciones',
        'pliegoItemIcono'       =>'pi pi-fw pi-check-square',
        'pliegoItemTo'          =>'/PliegoEspecificacion',

        'contratolabel'         =>'Gestion de Firma de Contrato',
        'contratoIcono'         =>'pi pi-fw pi-sitemap',
        'contratoItemLabel'     =>'Firma de contrato',
        'contratoItemIcono'     =>'pi pi-fw pi-id-card',
        'contratoItemTo'        =>'/Contrato',

        'ordenlabel'            =>'Gestion de Orden de Cambio',
        'ordenIcono'            =>'pi pi-fw pi-sitemap',
        'ordenItemLabel'        =>'Orden de cambio',
        'ordenItemIcono'        =>'pi pi-fw pi-id-card',
        'ordenItemTo'           =>'/Orden',

        'planlabel'             =>'Gestion de Plan de Pagos',
        'planIcono'             =>'pi pi-fw pi-sitemap',
        'planItemLabel'         =>'Plan de pagos',
        'planItemIcono'         =>'pi pi-fw pi-id-card',
        'planItemTo'            =>'/Plan',

        'parteAlabel'           =>'Gestion de Entrega Parte A',
        'parteAIcono'           =>'pi pi-fw pi-sitemap',
        'parteAItemLabel'       =>'Parte A',
        'parteAItemIcono'       =>'pi pi-fw pi-id-card',
        'parteAItemTo'          =>'/ParteA',

        'parteBlabel'           =>'Gestion de Entrega Parte B',
        'parteBIcono'           =>'pi pi-fw pi-sitemap',
        'parteBItemLabel'       =>'Parte B',
        'parteBItemIcono'       =>'pi pi-fw pi-id-card',
        'parteBItemTo'          =>'/ParteB',

        'listEmpresalabel'      =>'Lista de empresas',
        'listEmpresaIcono'      =>'i pi-fw pi-briefcase',
        'listEmpresaItemLabel'  =>'Empresas',
        'listEmpresaItemIcono'  =>'pi pi-fw pi-briefcase',
        'listEmpresaItemTo'     =>'/ListEmpresa',

        'listConvlabel'         =>'Lista de Publicaciones Convocatorias',
        'listConvIcono'         =>'pi pi-fw pi-sitemap',
        'listConvItemLabel'     =>'Convocatoria',
        'listConvItemIcono'     =>'pi pi-fw pi-id-card',
        'listConvItemTo'        =>'/ListConvocatoria',

        'listPliegolabel'       =>'Lista de Publicaciones Pliego de Especificaciones',
        'listPliegoIcono'       =>'pi pi-fw pi-sitemap',
        'listPliegoItemLabel'   =>'Pliego de Especificaciones',
        'listPliegoItemIcono'   =>'pi pi-fw pi-check-square',
        'listPliegoItemTo'      =>'/ListPliego',

        'foroIcono'             =>'',
        'forolabel'             =>'',
        'foroItemLabel'         =>'',
        'foroItemIcono'         =>'',
        'foroItemTo'            =>'',

        'estado'                =>'Activo',
        'rol'                   =>'rol-21sd3dgrf'

        ));

        // -----------Docente---------------------------
        DB::table('items')->
        insert(array(
        'id'                    =>'items-kxhg2g4y',
        'homelabel'             =>'Home',
        'homeIcono'             =>'pi pi-fw pi-home',
        'homeItemLabel'         =>'Tablero',
        'homeItemIcono'         =>'pi pi-fw pi-home',
        'homeItemTo'            =>'/',

        'rolelabel'             =>'',
        'roleIcono'             =>'',
        'roleItemLabel'         =>'',
        'roleItemIcono'         =>'',
        'roleItemTo'            =>'',

        'itemlabel'             =>'',
        'itemIcono'             =>'',
        'itemItemLabel'         =>'',
        'itemItemIcono'         =>'',
        'itemItemTo'            =>'',


        'userlabel'             =>'',
        'userIcono'             =>'',
        'userItemLabel'         =>'',
        'userItemIcono'         =>'',
        'userItemTo'            =>'',

        'empresalabel'          =>'',
        'empresaIcono'          =>'',
        'empresaItemLabel'      =>'',
        'empresaItemIcono'      =>'',
        'empresaItemTo'         =>'',

        'convocatorialabel'     =>'Gestion Publicacion Convocatoria',
        'convocatoriaIcono'     =>'pi pi-fw pi-sitemap',
        'convocatoriaItemLabel' =>'Convocatoria',
        'convocatoriaItemIcono' =>'pi pi-fw pi-id-card',
        'convocatoriaItemTo'    =>'/Convocatoria',

        'pliegolabel'           =>'Gestion Publicacion Pliego de Especificaciones',
        'pliegoIcono'           =>'pi pi-fw pi-sitemap',
        'pliegoItemLabel'       =>'Pliego de Especificaciones',
        'pliegoItemIcono'       =>'pi pi-fw pi-check-square',
        'pliegoItemTo'          =>'/PliegoEspecificacion',

        'contratolabel'         =>'Gestion de Firma de Contrato',
        'contratoIcono'         =>'pi pi-fw pi-sitemap',
        'contratoItemLabel'     =>'Firma de contrato',
        'contratoItemIcono'     =>'pi pi-fw pi-id-card',
        'contratoItemTo'        =>'/Contrato',

        'ordenlabel'            =>'Gestion de Orden de Cambio',
        'ordenIcono'            =>'pi pi-fw pi-sitemap',
        'ordenItemLabel'        =>'Orden de cambio',
        'ordenItemIcono'        =>'pi pi-fw pi-id-card',
        'ordenItemTo'           =>'/Orden',

        'planlabel'             =>'Gestion de Plan de Pagos',
        'planIcono'             =>'pi pi-fw pi-sitemap',
        'planItemLabel'         =>'Plan de pagos',
        'planItemIcono'         =>'pi pi-fw pi-id-card',
        'planItemTo'            =>'/Plan',

        'parteAlabel'           =>'Gestion de Entrega Parte A',
        'parteAIcono'           =>'pi pi-fw pi-sitemap',
        'parteAItemLabel'       =>'Parte A',
        'parteAItemIcono'       =>'pi pi-fw pi-id-card',
        'parteAItemTo'          =>'/ParteA',

        'parteBlabel'           =>'Gestion de Entrega Parte B',
        'parteBIcono'           =>'pi pi-fw pi-sitemap',
        'parteBItemLabel'       =>'Parte B',
        'parteBItemIcono'       =>'pi pi-fw pi-id-card',
        'parteBItemTo'          =>'/ParteB',

        'listEmpresalabel'      =>'Lista de empresas',
        'listEmpresaIcono'      =>'i pi-fw pi-briefcase',
        'listEmpresaItemLabel'  =>'Empresas',
        'listEmpresaItemIcono'  =>'pi pi-fw pi-briefcase',
        'listEmpresaItemTo'     =>'/ListEmpresa',

        'listConvlabel'         =>'Lista de Publicaciones Convocatorias',
        'listConvIcono'         =>'pi pi-fw pi-sitemap',
        'listConvItemLabel'     =>'Convocatoria',
        'listConvItemIcono'     =>'pi pi-fw pi-id-card',
        'listConvItemTo'        =>'/ListConvocatoria',

        'listPliegolabel'       =>'Lista de Publicaciones Pliego de Especificaciones',
        'listPliegoIcono'       =>'pi pi-fw pi-sitemap',
        'listPliegoItemLabel'   =>'Pliego de Especificaciones',
        'listPliegoItemIcono'   =>'pi pi-fw pi-check-square',
        'listPliegoItemTo'      =>'/ListPliego',

        'foroIcono'             =>'',
        'forolabel'             =>'',
        'foroItemLabel'         =>'',
        'foroItemIcono'         =>'',
        'foroItemTo'            =>'',

        'estado'                =>'Activo',
        'rol'                   =>'rol-21sd3dgrf'

        ));

        //--------- Estudiante---------------------
        DB::table('items')->
        insert(array(
        'id'                    =>'items-oisd2g4y',
        'homelabel'             =>'Home',
        'homeIcono'             =>'pi pi-fw pi-home',
        'homeItemLabel'         =>'Tablero',
        'homeItemIcono'         =>'pi pi-fw pi-home',
        'homeItemTo'            =>'/',

        'rolelabel'             =>'',
        'roleIcono'             =>'',
        'roleItemLabel'         =>'',
        'roleItemIcono'         =>'',
        'roleItemTo'            =>'',

        'itemlabel'             =>'',
        'itemIcono'             =>'',
        'itemItemLabel'         =>'',
        'itemItemIcono'         =>'',
        'itemItemTo'            =>'',


        'userlabel'             =>'',
        'userIcono'             =>'',
        'userItemLabel'         =>'',
        'userItemIcono'         =>'',
        'userItemTo'            =>'',

        'empresalabel'          =>'Gestion de Empresa',
        'empresaIcono'          =>'pi pi-fw pi-briefcase',
        'empresaItemLabel'      =>'Empresas',
        'empresaItemIcono'      =>'pi pi-fw pi-briefcase',
        'empresaItemTo'         =>'/Empresa',

        'convocatorialabel'     =>'Gestion Publicacion Convocatoria',
        'convocatoriaIcono'     =>'pi pi-fw pi-sitemap',
        'convocatoriaItemLabel' =>'Convocatoria',
        'convocatoriaItemIcono' =>'pi pi-fw pi-id-card',
        'convocatoriaItemTo'    =>'/Convocatoria',

        'pliegolabel'           =>'Gestion Publicacion Pliego de Especificaciones',
        'pliegoIcono'           =>'pi pi-fw pi-sitemap',
        'pliegoItemLabel'       =>'Pliego de Especificaciones',
        'pliegoItemIcono'       =>'pi pi-fw pi-check-square',
        'pliegoItemTo'          =>'/PliegoEspecificacion',

        'contratolabel'         =>'Gestion de Firma de Contrato',
        'contratoIcono'         =>'pi pi-fw pi-sitemap',
        'contratoItemLabel'     =>'Firma de contrato',
        'contratoItemIcono'     =>'pi pi-fw pi-id-card',
        'contratoItemTo'        =>'/Contrato',

        'ordenlabel'            =>'Gestion de Orden de Cambio',
        'ordenIcono'            =>'pi pi-fw pi-sitemap',
        'ordenItemLabel'        =>'Orden de cambio',
        'ordenItemIcono'        =>'pi pi-fw pi-id-card',
        'ordenItemTo'           =>'/Orden',

        'planlabel'             =>'Gestion de Plan de Pagos',
        'planIcono'             =>'pi pi-fw pi-sitemap',
        'planItemLabel'         =>'Plan de pagos',
        'planItemIcono'         =>'pi pi-fw pi-id-card',
        'planItemTo'            =>'/Plan',

        'parteAlabel'           =>'Gestion de Entrega Parte A',
        'parteAIcono'           =>'pi pi-fw pi-sitemap',
        'parteAItemLabel'       =>'Parte A',
        'parteAItemIcono'       =>'pi pi-fw pi-id-card',
        'parteAItemTo'          =>'/ParteA',

        'parteBlabel'           =>'Gestion de Entrega Parte B',
        'parteBIcono'           =>'pi pi-fw pi-sitemap',
        'parteBItemLabel'       =>'Parte B',
        'parteBItemIcono'       =>'pi pi-fw pi-id-card',
        'parteBItemTo'          =>'/ParteB',

        'listEmpresalabel'      =>'Lista de empresas',
        'listEmpresaIcono'      =>'i pi-fw pi-briefcase',
        'listEmpresaItemLabel'  =>'Empresas',
        'listEmpresaItemIcono'  =>'pi pi-fw pi-briefcase',
        'listEmpresaItemTo'     =>'/ListEmpresa',

        'listConvlabel'         =>'Lista de Publicaciones Convocatorias',
        'listConvIcono'         =>'pi pi-fw pi-sitemap',
        'listConvItemLabel'     =>'Convocatoria',
        'listConvItemIcono'     =>'pi pi-fw pi-id-card',
        'listConvItemTo'        =>'/ListConvocatoria',

        'listPliegolabel'       =>'Lista de Publicaciones Pliego de Especificaciones',
        'listPliegoIcono'       =>'pi pi-fw pi-sitemap',
        'listPliegoItemLabel'   =>'Pliego de Especificaciones',
        'listPliegoItemIcono'   =>'pi pi-fw pi-check-square',
        'listPliegoItemTo'      =>'/ListPliego',

        'foroIcono'             =>'',
        'forolabel'             =>'',
        'foroItemLabel'         =>'',
        'foroItemIcono'         =>'',
        'foroItemTo'            =>'',

        'estado'                =>'Activo',
        'rol'                   =>'rol-ky3hq0kb'

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
