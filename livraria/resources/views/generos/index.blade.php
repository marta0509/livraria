@if(auth()->check())
	<h3>Login efetuado por:</h3>
	<b>Id:</b>{{Auth::user()->id}}<br>
	<b>Email:</b>{{Auth::user()->email}}<br>
	<b>Name:</b>{{Auth::user()->name}}<br>
@endif
<hr>
<ul>
@foreach($generos as $genero)
	<li>
		<a href="{{route('generos.show',['id'=>$genero->id_genero])}}">
			{{$genero->designacao}}
		</a>
	</li>
@endforeach
</ul>
@if(session()->has('mensagem'))
	<div class="alert alert-danger" role="alert">
		{{session('mensagem')}}
	</div>
@endif

@if(auth()->check())
	<a href="{{route('generos.create')}}">Adicionar</a>
@endif