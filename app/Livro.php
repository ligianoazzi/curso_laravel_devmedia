<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{

	public function listaLivros()
	{
		return $this->all();
	}

}
