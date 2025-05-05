<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'descricao', 'preco', 'estoque', 'data_cadastro_produto'];

    public function itensPedido()
    {
        return $this->hasMany(ItensPedido::class, 'produto_id');
    }
}
