<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{

    use HasFactory;
    protected $fillable=['nome', 'descricao'];

    protected $table='categorias';

    public function produto(){
        return $this->hasMany('App\Models\Produto', 'id_produto');
    }
}
