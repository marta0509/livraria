<b>ID:</b>{{$livro->id_livro}}<br>
<b>Título:</b>{{$livro->titulo}}<br>
<b>Idioma:</b>{{$livro->idioma}}<br>
<b>Páginas:</b>{{$livro->total_paginas}}<br>
<b>ISBN:</b>{{$livro->isbn}}<br>

@if(count($livro->autores)>0)
	<b>Autores:</b> <br>
	@foreach($livro->autores as $autor)
		{{$autor->nome}}<br>
	@endforeach
@else
	<div class="alert alert-danger" role="alert">
		Sem autor definido
	</div>
@endif

@if(isset($livro->genero->designacao))
	<b>Genero:</b>{{$livro->genero->designacao}}<br>
@endif

@if(count($livro->editoras)>0)
@foreach($livro->editoras as $editora)
	<b>Editora:</b>{{$editora->nome}}<br>
@endforeach
@else
<div class="alert alert-danger" role="alert">
	Sem editora definido
</div>
@endif

<a href="{{route('livros.edit',['id'=>$livro->id_livro])}}">Editar</a>
<a href="{{route('livros.delete',['id'=>$livro->id_livro])}}">Eliminar</a>