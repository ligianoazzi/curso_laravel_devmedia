<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/cliente', function () {
    return view('cliente');
});

Route::get('aluno', 'Aluno\AlunoController@index'/*, function(){
	
}*/);

Route::get('livro/lista', ['uses'=>'LivroController@index', 'as'=>'livro.index']);
// livro/lista (usado na url)
// LivroController (nome do arquivo e classe do controller)
// @index é a função dentro da classe
// livro.index (vai usar nas urls, se mudar o nome ou o caminho do controller, e o nome da rota, ex. livro/lista para apenas livro, não quebra os links do sistema inteiro)

// definindo apelido (livro.index) para a rota
// defining nickname (livro.index) for route, 

//Route::controller('produto','ProdutoController');
// implicito




/*Route::get('home', function(){
	$usuario = "Ligiano";
	return view('home', compact('usuario'));
});

Route::get('produto', 'ProdutoController@index');*/

Route::get('home', function(){
	$usuarios = array(
		["nome"=>"Ligiano"],
		["nome"=>"Raquel"]
		);
	$livros=[];
	return view('home', compact('usuarios', 'livros'));
});

Route::get('produto', 'ProdutoController@index');
