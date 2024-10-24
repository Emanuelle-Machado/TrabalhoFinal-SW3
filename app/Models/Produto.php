<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable=['nome','preco', 'id_categoria'];

    protected $table='produtos';

	public function categoria()
	{
		return $this->hasOne('App\Models\Categoria', 'id', 'id_categoria');
	}

}
