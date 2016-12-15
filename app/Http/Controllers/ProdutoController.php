<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Http\Requests;

class ProdutoController extends Controller
{
    public function Index()
    {
    	$produto = ["nome"=>'Ligiano'];

    //	return view('produto.index', ["nome"=>'Ligiano']);
    	return view('produto.index',compact('produto'));
    }

    public function getLista()
    {
    	return "Lista de Produtos";
    }
}
