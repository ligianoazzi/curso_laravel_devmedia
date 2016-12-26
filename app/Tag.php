<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['nome'];

	public function livros()
	{
		return $this->belongsToMany('App\Livro', 'livros_tags', 'tags_id', 'livros_id');
		// aqui é o inverso de Livro.php, chama a mesma tabela (livros tags), mas depois vem o tags_id que é o da model em questão
		// quase a mesma coisa que na model tags, porém altera o nome da tag p livro
	}

}
