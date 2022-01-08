<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['id','homelabel','homeIcono','homeItemLabel','homeItemIcono','homeItemTo','rolelabel','roleIcono','roleItemLabel','roleItemIcono','roleItemTo','itemlabel','itemIcono','itemItemLabel','itemItemIcono','itemItemTo','userlabel','userIcono','userItemLabel','userItemIcono','userItemTo','empresalabel','empresaIcono','empresaItemLabel','empresaItemIcono','empresaItemTo','convocatorialabel','convocatoriaIcono','convocatoriaItemLabel','convocatoriaItemIcono','convocatoriaItemTo','pliegolabel','pliegoIcono','pliegoItemLabel','pliegoItemIcono','pliegoItemTo','contratolabel','contratoIcono','contratoItemLabel','contratoItemIcono','contratoItemTo','ordenlabel','ordenIcono','ordenItemLabel','ordenItemIcono','ordenItemTo','planlabel','planIcono','planItemLabel','planItemIcono','planItemTo','parteAlabel','parteAIcono','parteAItemLabel','parteAItemIcono','parteAItemTo','parteBlabel','parteBIcono','parteBItemLabel','parteBItemIcono','parteBItemTo','listEmpresalabel','listEmpresaIcono','listEmpresaItemLabel','listEmpresaItemIcono','listEmpresaItemTo','listConvlabel','listConvIcono','listConvItemLabel','listConvItemIcono','listConvItemTo','listPliegolabel','listPliegoIcono','listPliegoItemLabel','listPliegoItemIcono','listPliegoItemTo','forolabel','foroIcono','foroItemLabel','foroItemIcono','foroItemTo','home','role','item','user','empresa','convocatoria','pliego','contrato','orden','plan','parteA','parteB','listEmpresa','listConv','listPliego','foro','estado','rol'];

    protected $hidden = ['created_at','updated_at'];
}
