ID:{{$livro->id_livro}}<br>
Título:{{$livro->titulo}}<br>
Idioma:{{$livro->idioma}}<br>
Páginas:{{$livro->total_paginas}}<br>
@if(count($livro->autores)>0)

@foreach($livro->autores as $autor)
	Autor:{{$autor->nome}}<br>
@endforeach
@else
<div class="alert alert-danger" role="alert">
	Sem autor definido
</div>
@endif

@if(isset($livro->genero->designacao))
	Genero:{{$livro->genero->designacao}}
@endif