<!--ID:{{$livro->id_livros}}<br>
Título:{{$livro->titulo}}<br>
Idioma:{{$livro->idioma}}<br>
Páginas:{{$livro->total_paginas}}<br>-->
@if(isset($livro->genero->designacao))
	Genero:{{$livro->genero->designacao}}
@endif