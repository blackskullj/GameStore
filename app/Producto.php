<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    protected $fillable = ['nombre', 'codigo', 'descripcion', 'precio', 'existencia'];
    public $timestamps = false;

    public function pedidos()
    {
        return $this->belongsToMany(Cliente::class);
    }
}
