<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['id','fecha','codigoConvocatoria','codigoPliego'
    ,'estado','empresa','user'];
}
