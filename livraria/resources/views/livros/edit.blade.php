<form action="{{route('livros.update',['id'=>$livro->id_livro])}}" method="post">
	@csrf
	@method('patch')

	Título: <input type="text" name="titulo" value="{{$livro->titulo}}"><br>
	@if ($errors->has('titulo'))
	Deverá indicar um título válido<br>
	@endif

	Idioma: <input type="text" name="idioma" value="{{$livro->idioma}}"><br>
	Total páginas:<input type="text" name="total_paginas" value="{{$livro->total_paginas}}"><br>
	Data Edição: <input type="text" name="data_edicao" value="{{$livro->data_edicao}}"><br>
	ISBN: <input type="text" name="isbn" value="{{$livro->isbn}}"><br>
	@if ($errors->has('isbn'))
	Deverá indicar um ISBN correto (13 caracteres)<br>
	@endif

	Observações: <textarea name="observacoes" value="{{$livro->observacoes}}"></textarea><br>
	Género: <select name="id_genero">
				@foreach($generos as $genero)
					<option value="{{$genero->id_genero}}" 
						@if($genero->id_genero==$livro->id_genero)selected 
						@endif >{{$genero->designacao}}</option>
				@endforeach
			</select>
			@if ($errors->has('id_genero'))
				Deverá indicar um ISBN correto (13 caracteres)<br>
			@endif
			<br>
	<!--<input type="text" name="id_genero" value="{{$livro->id_genero}}"><br>-->
	Sinopse: <textarea name="sinopse" >{{$livro->sinopse}}</textarea><br>
	Autor(es):<select name="id_autor[]" multiple="multiple">
				@foreach($autores as $autor)
					<option 
					value="{{$autor->id_autor}}"
					@if(in_array($autor->id_autor,$autoresLivro))selected @endif
					>
						{{$autor->nome}}</option>
				@endforeach
			</select>
			@if ($errors->has('id_autor'))
				Deverá indicar um ISBN correto (13 caracteres)<br>
			@endif
			<br>
	<input type="submit" name="enviar">
</form>