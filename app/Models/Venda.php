<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;

    protected $fillable=['id_cliente','id_produto', 'id_vendedor'];

    protected $table='vendas';

    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'id_cliente');
    }

    public function produto()
    {
        return $this->hasOne('App\Models\Produto', 'id', 'id_produto');
    }

    public function vendedor()
    {
        return $this->hasOne('App\Models\Vendedor', 'id', 'id_vendedor');
    }
}
