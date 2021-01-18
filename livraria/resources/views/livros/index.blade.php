@if(auth()->check())
	<h3>Login efetuado por:</h3>
	<b>Id:</b>{{Auth::user()->id}}<br>
	<b>Email:</b>{{Auth::user()->email}}<br>
	<b>Name:</b>{{Auth::user()->name}}<br>
@endif
<hr>
<ul>
@foreach($livros as $livro)
	<li>
		<a href="{{route('livros.show',['id'=>$livro->id_livro])}}">
			{{$livro->titulo}}
		</a>
	</li>
@endforeach
</ul>
@if(session()->has('mensagem'))
		<div class="alert alert-danger" role="alert">
			{{session('mensagem')}}
		</div>
	@endif

<br>
@if(auth()->check())
	<a href="{{route('livros.create')}}">Adicionar</a>
@endif