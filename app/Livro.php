<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{

	protected $fillable = ['titulo', 'descricao'];

	public function listaLivros()
	{
		return $this->all();
		//return $this->db->get("usuario")->result_array();
	}

	public function tags()
	{
		return $this->belongsToMany('App\Tag', 'livros_tags', 'livros_id', 'tags_id');
	}// retorna todas as tags de um livro

	public function addTag(Tag $tag)
	{
		return $this->tags()->save($tag);
	}

}