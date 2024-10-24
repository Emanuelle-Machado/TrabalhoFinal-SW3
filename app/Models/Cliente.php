<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable=['nome','cpf','telefone','id_endereco'];

    protected $table='clientes';

	public function user()
	{
		return $this->hasOne('App\Models\Endereco', 'id','id_endereco');
	}


}
