<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = ['data_pedido', 'status', 'valor_total', 'cliente_id'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    public function itensPedido()
    {
        return $this->hasMany(ItensPedido::class, 'pedido_id');
    }
}

