<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
    	'nombre',
        'descripcion',
        'existencia',
        'lote',
        'fecha_de_compra',
    ];

    protected $table = 'productos';
}
