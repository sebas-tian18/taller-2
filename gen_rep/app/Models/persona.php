<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    use HasFactory;
    protected $table = 'persona';
    protected $fillable=['id_persona','nombre','apellido','fecha_nac','cedula_ident','direccion','FK_id_sexo'];
}
