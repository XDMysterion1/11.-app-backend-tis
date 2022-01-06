<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordens', function (Blueprint $table) {
            $table->string('id', 30)->primary();
            $table->string('fecha');
            $table->string('caratulaA'           ,256);
            $table->string('indiceA'             ,256);
            $table->string('cartaA'              ,512);
            $table->string('boletaA'             ,512);
            $table->string('conformacionA'       ,512);
            $table->string('solvenciaA'          ,512);

            $table->string('caratulaB'           ,256);
            $table->string('indiceB'             ,256);
            $table->string('propuestaServicioB'  ,512);
            $table->string('planificacionB'      ,512);
            $table->string('propuestaEconomicaB' ,512);
            $table->string('planPagosB'          ,512);

            $table->string('cumplimientoProponente' ,10);
            $table->string('claridadOrganizacion'   ,10);
            $table->string('cumplimientoTecnico'    ,10);
            $table->string('claridadProceso'        ,10);
            $table->string('plazosEjecucion'        ,10);
            $table->string('precioTotal'            ,10);
            $table->string('usoHerramienta'         ,10);

            $table->string('estado');

            $table->timestamps();

            $table->string('empresa'); 
            $table->foreign('empresa')->references('id')->on('empresas')->nullable()->onDelete('SET NULL');

            $table->string('user'); 
            $table->foreign('user')->references('id')->on('users')->nullable()->onDelete('SET NULL');
        });

        DB::table('ordens')->
        insert(array(
        'id'                      =>'Orden-kxdlrcei',
        'fecha'                   =>'miércoles, 29 de diciembre de 2021',
        'caratulaA'               =>'No presentaron conforme al modelo',
        'indiceA'                 =>'Cumple parcialmente ya que no se indican las paginas',
        'cartaA'                  =>'Deben mejorar',
        'boletaA'                 =>'Ok',
        'conformacionA'           =>'TIS observa que falta correspondencia y completitud de los datos comparando con el Anexo B propuesto el CPTIS La fecha indicada al cierre del documento sale del marco legal de las fechas establecidas por TIS',
        'solvenciaA'              =>'Presentan una estructura de su empresa demasiada complicada y burocratica por tanto TIS pone en observacion No acreditan de manera adecuada el conocimiento tecnologico de los socios de su empresa por lo que TIS observa',

        'caratulaB'               =>'No presentaron',
        'indiceB'                 =>'Presentaron',
        'propuestaServicioB'      =>'En el punto que corresponde a la descripcion del sistema a desarrollarno reflejan todo el contexto cabal del trabajo realizado y se obvia a los demas actores. Los objetivos especificos tampoco reflejan de forma completa los alcances del sistemaTIS considera que su propuesta no contempla aspectos claves como los alcances del sistema los productos o servicios entregables etc',
        'planificacionB'          =>'ok',
        'propuestaEconomicaB'     =>'una propuesta muy desordenada poco esmero puesto por la empresa a su trabajo un antecedente que tomara en cuenta TISLa estimacion de costos definitivamente no se  respalda con ningun metodo formal su calculo es un saludo a la bandera y prescinde de un fundamento tecnico Las estimaciones del esfuerzo que corresponde a los recursos humanos no han sido consideradas de manera explicita y tampoco los entregables al concluir cada sprint',
        'planPagosB'              =>'Los pagos segun la propuesta del plan no tiene sentido si el calculo de estos no siguen la formalidad debida.',

        'cumplimientoProponente'  =>'5',
        'claridadOrganizacion'    =>'7',
        'cumplimientoTecnico'     =>'7',
        'claridadProceso'         =>'3',
        'plazosEjecucion'         =>'3',
        'precioTotal'             =>'5',
        'usoHerramienta'          =>'4',

        'estado'                  =>'Activo',

        'empresa'                 =>'empresa-kwa2640y',
        'user'                    =>'user-ss12qswe'
        ));

        DB::table('ordens')->
        insert(array(
        'id'                      =>'Orden-kxoqljdg',
        'fecha'                   =>'miércoles, 29 de diciembre de 2021',
        'caratulaA'               =>'todo perfecto',
        'indiceA'                 =>'todo claro',
        'cartaA'                  =>'falta especificar',
        'boletaA'                 =>'ok',
        'conformacionA'           =>'perfecto',
        'solvenciaA'              =>'mejorar en algunos puntos',

        'caratulaB'               =>'todo bien',
        'indiceB'                 =>'Bien',
        'propuestaServicioB'      =>'esta bien pero si se puede mejorar mejor',
        'planificacionB'          =>'ok',
        'propuestaEconomicaB'     =>'bien',
        'planPagosB'              =>'mejorar los porcentajes',

        'cumplimientoProponente'  =>'12',
        'claridadOrganizacion'    =>'7',
        'cumplimientoTecnico'     =>'19',
        'claridadProceso'         =>'6',
        'plazosEjecucion'         =>'4',
        'precioTotal'             =>'8',
        'usoHerramienta'          =>'7',

        'estado'                  =>'Activo',

        'empresa'                 =>'empresa-kwa2640y',
        'user'                    =>'user-ss12qswe'
        ));

        DB::table('ordens')->
        insert(array(
        'id'                      =>'Orden-ky1zdw8t',
        'fecha'                   =>'miércoles, 5 de enero de 2022',
        'caratulaA'               =>'ok',
        'indiceA'                 =>'ok',
        'cartaA'                  =>'ok',
        'boletaA'                 =>'ok',
        'conformacionA'           =>'ok',
        'solvenciaA'              =>'ok',

        'caratulaB'               =>'todo bien',
        'indiceB'                 =>'Bien',
        'propuestaServicioB'      =>'ok',
        'planificacionB'          =>'ok',
        'propuestaEconomicaB'     =>'bien',
        'planPagosB'              =>'bien',

        'cumplimientoProponente'  =>'11',
        'claridadOrganizacion'    =>'7',
        'cumplimientoTecnico'     =>'1',
        'claridadProceso'         =>'5',
        'plazosEjecucion'         =>'5',
        'precioTotal'             =>'0',
        'usoHerramienta'          =>'10',

        'estado'                  =>'Activo',

        'empresa'                 =>'empresa-kwarin4p',
        'user'                    =>'user-kvok0fcb'
        ));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordens');
    }
}
