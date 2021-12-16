<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['id','nombre','nombreCorto',
    'nombreLargo','tipoSociedad','direccion','email','password','informacion'
    ,'estado','user'];
    protected $hidden = ['created_at','updated_at'];
}
