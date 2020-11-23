ID:{{$genero->id_genero}}<br>
Designação:{{$genero->designacao}}<br>
Observações:{{$genero->observacoes}}
@foreach($genero->livros as $livro)
	<h3>{{$livro->titulo}}</h3>
@endforeach