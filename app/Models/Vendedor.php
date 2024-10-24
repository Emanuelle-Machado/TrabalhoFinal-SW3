<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    use HasFactory;

    protected $fillable=['id_user','cpf','telefone','salario'];

    protected $table='vendedors';

	public function user()
	{
		return $this->hasOne('App\Models\User', 'id', 'id_user');
	}

}
