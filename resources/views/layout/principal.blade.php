<html>
<head>
	<title>appTest - @yield('titulo')</title>
</head>
<body>
	<header>

		@section('navbar')
		@include('layout._includes._navbar')
		<p>aqui vamos ter o nosso navbar</p>
		<p> fou substituido pela nova navbar
		lele
		@show
		<hr>
	</header>
	<main>
		<div>
			@yield('conteudo')
			lala
		</div>
	</main>	
	<footer>
		<hr>
		@section('footer')
			@include('layout._includes._footer')
		@show
	</footer>

</body>
</html>
