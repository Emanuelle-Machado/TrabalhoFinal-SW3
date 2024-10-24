<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $fillable=['rua','numero','cep','cidade','estado'];

    protected $table='enderecos';

    public function cliente(){
        return $this->hasMany('App\Models\Cliente', 'id_endereco');
    }

}
