<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedidos';
    protected $fillable = ['fechaPedido', 'cliente_id'];

    public $timestamps = false;

    public function productos()
    {
        return $this->belongsToMany(Producto::class);
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
