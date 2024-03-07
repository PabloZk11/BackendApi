<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class devolucion extends Model
{
    use HasFactory;

    
    protected $table = 'devolucion';
    protected $primaryKey = 'id_devolucion';

    protected $fillable = [
      'nom_producto',
      'unidades',
      'detalle',
      'id_entrada_devolvucion'  
    ];

    public $timestamps = false;
    
}
