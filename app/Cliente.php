<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nome', 'sobrenome'];
    // permitindo inserção em massa

    public function telefones()
    {
    	return $this->hasMany('App\Telefone');
    }
    // o nome da funcao pode variar, o que puxa os dados é App\Telefone
}