<?php

use Illuminate\Database\Seeder;

class LivrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	
    	/*DB::table('livros')->insert([
    		'titulo' => 'Primeiro Livro',
    		'descricao' => 'Descrição do Primeiro livro'
    		]);*/
    	
    	factory('App\Livro',50)->create();
    	// pode também ser rodado pelo Tinker, mas tem que copiar o codigo e inserir no cmd

    }
}
