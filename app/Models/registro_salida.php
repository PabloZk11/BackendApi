<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registro_salida extends Model
{
    use HasFactory;
    protected $table = 'registro_salida';
    protected $primaryKey = 'id_salida';


    protected $fillable = [
        "id_salida",
        "id_producto_salida",
        "unidades",
        "id_factura_salidas"
    ];

    public $timestamps = false;
}