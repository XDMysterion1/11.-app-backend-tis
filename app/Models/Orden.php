<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['id','fecha','caratulaA','indiceA','cartaA','boletaA','conformacionA','solvenciaA',
    'caratulaB','indiceB','propuestaServicioB','planificacionB','propuestaEconomicaB','planPagosB',
    'cumplimientoProponente','claridadOrganizacion','cumplimientoTecnico','claridadProceso','plazosEjecucion',
    'precioTotal','usoHerramienta','estado','empresa','user'];
}
