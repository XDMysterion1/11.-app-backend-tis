<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pliego extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['id','titulo','codigo','semestre','link','publicado','estado','user'];
}
