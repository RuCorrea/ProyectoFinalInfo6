<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedore extends Model
{
    use HasFactory;
    protected $fillable = ['razon_social', 'tipo_de_persona', 'rfc','domicilio','email','telefono'];
}
