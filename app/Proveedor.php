<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
   protected $fillable = ['razon_social', 'nombre','apellido','localidad','direccion','telefono'];
}
