<b>ID:</b>{{$genero->id_genero}}<br>
<b>Designação:</b>{{$genero->designacao}}<br>
<b>Observações:</b>{{$genero->observacoes}}
@foreach($genero->livros as $livro)
	<h5><b>Titulo do livro:</b>{{$livro->titulo}}</h5>
@endforeach
<a href="{{route('generos.edit',['id'=>$genero->id_genero])}}">Editar</a>