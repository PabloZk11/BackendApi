<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\producto;

class producto extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_producto';
    protected $table = 'productos';

    protected $fillable = [
        "id_categoria_producto",
        "nom_producto",
        "precio",
        "unidades",
        "detalles_descripcion"
    ];
    

    public $timestamps = false;
    
}
