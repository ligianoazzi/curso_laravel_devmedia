<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Usuario; //desta forma estou chamando para todas as funcoes

class UsuarioController extends Controller
{
    public function index()
    {
    	//$usuario = new App\Providers\Usuario; // desta forma estou chamando apenas para a função index
	      $usuario = new Usuario; // (seria assim se tivesse o "use" da linha 7)
	      						  // fazendo referencia a Model que está na raiz da pasta App
	      $user = $usuario->getUsuario();

	      $lista = Usuario::listaUsuarios(); // pegando um método estático

    	return view('usuario.index', compact('user', 'lista'));
    }
}
