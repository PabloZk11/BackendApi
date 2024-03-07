<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vendedor extends Model
{
    use HasFactory;
    protected $table = 'vendedor';

    protected $fillable = [
        "id_tdoc_vendedor"
    ];
    

    public $timestamps = false;

}


