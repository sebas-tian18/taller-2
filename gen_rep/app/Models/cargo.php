<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cargo extends Model
{
    use HasFactory;
    protected $table = 'cargo';
    protected $fillable=['id_cargo','cargo_laboral','descripcion cargo','salario_mensual'];
}
