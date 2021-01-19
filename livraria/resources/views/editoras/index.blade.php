@if(auth()->check())
	<h3>Login efetuado por:</h3>
	<b>Id:</b>{{Auth::user()->id}}<br>
	<b>Email:</b>{{Auth::user()->email}}<br>
	<b>Name:</b>{{Auth::user()->name}}<br>
@endif
<hr>
<ul>
@foreach($editoras as $editora)

	<li>
		<a href="{{route('editoras.show',['id'=>$editora->id_editora])}}">
			{{$editora->nome}}
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
	<a href="{{route('editoras.create')}}">Adicionar</a>
@endif