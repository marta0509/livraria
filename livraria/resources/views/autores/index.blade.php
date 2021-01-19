@if(auth()->check())
	<h3>Login efetuado por:</h3>
	<b>Id:</b>{{Auth::user()->id}}<br>
	<b>Email:</b>{{Auth::user()->email}}<br>
	<b>Name:</b>{{Auth::user()->name}}<br>
@endif
<hr>
<ul>
@foreach($autores as $autor)
	<li>
		<a href="{{route('autores.show',['id'=>$autor->id_autor])}}">
			{{$autor->nome}}
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
	<a href="{{route('autores.create')}}">Adicionar</a>
@endif
