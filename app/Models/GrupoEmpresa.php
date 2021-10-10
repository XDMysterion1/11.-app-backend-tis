<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupoEmpresa extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['id','nombreCorto','nombreLargo','tipoSociedad'];
    protected $hidden = ['created_at','updated_at'];
}
