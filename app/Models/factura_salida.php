<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class factura_salida extends Model
{
    use HasFactory;

    protected $table = 'factura_salida';
    protected $primaryKey = 'id_factura';

    protected $fillable = [
      'id_vendedor_factura',
      'descripcion',
      'fecha'  
    ];
}
