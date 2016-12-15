@extends('layout.principal')

@section('titulo','.. Home ..')

@section('navbar')
	@parent
	<p>nova navbar</p>
@endsection

@section('conteudo')
	<p>Aqui é o conteudo da Home</p>
	@if(2 === 1)
	   É igual a
	@elseif(2>1)
		É maior
	@endif
<br><br>
	@for($i=0;$i<3;$i++)
		Contando com o for: {{$i}} <br>
	@endfor
<br><br>

	@foreach($usuarios as $usuario)
		<p>Nome: {{$usuario['nome'] }} </p>
	@endforeach

	@forelse($livros as $livro)
		<p>Livro: {{$livro['livro'] }} </p>
		@empty
		<p> Nenhum livro encontrado! </p>
	@endforelse

	<?php $i = 0;	?>

	@while($i<=4)
		O valor de i: {{ $i++ }} <br>
	@endwhile

@endsection