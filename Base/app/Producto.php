<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'nombre','precio','descripcion','idrestaurante','idcategoria','idturno',
    ];
}
