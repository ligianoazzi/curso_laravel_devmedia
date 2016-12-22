<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{

	public function listaLivros()
	{
		return $this->all();
		//return $this->db->get("usuario")->result_array();
	}

}