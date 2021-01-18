@if(auth()->check())
	<h3>Login efetuado por:</h3>
	<b>Id:</b>{{Auth::user()->id}}<br>
	<b>Email:</b>{{Auth::user()->email}}<br>
	<b>Name:</b>{{Auth::user()->name}}<br>
@endif
<hr>
<ul>
@foreach($edicoes as $edicao)

	<li>
		<a href="{{route('edicoes.show',['id'=>$edicao->id_livro])}}">
			{{$edicao->id_livro}}
		</a>
		
	</li>
@endforeach
</ul>