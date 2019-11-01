<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    public $timestamps = false;
    protected $fillable = ['nombre', 'domicilioCalle', 'domicilioCalle', 'domicilioNumero', 'correoElectronico', 'telefono'];
    
    public function pedidos(){
        return $this->hasMany(Pedido::class);
    }
}
