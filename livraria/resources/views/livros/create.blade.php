<form action="{{route('livros.store')}}" method="post">
	@csrf
	Título: <input type="text" name="titulo" value="{{old('titulo')}}"><br>
	@if($errors->has('titulo'))
		Deverá indicar um titulo correto<br>
	@endif
	Idioma: <input type="text" name="idioma" value="{{old('idioma')}}"><br>
	@if($errors->has('idioma'))
		Deverá indicar um idioma correto<br>
	@endif
	Total Páginas: <input type="text" name="total_paginas" value="{{old('total_paginas')}}"><br>
	@if($errors->has('total_paginas'))
		Deverá indicar um total_paginas correto<br>
	@endif
	Data Edições: <input type="text" name="data_edicao" value="{{old('data_edicao')}}"><br>
	@if($errors->has('data_edicao'))
		Deverá indicar um data_edição correto<br>
	@endif
	ISBN: <input type="text" name="isbn" value="{{old('isbn')}}"><br>
	@if($errors->has('isbn'))
		Deverá indicar um ISBN correto (13 caracteres)<br>
	@endif
	Observações: <textarea name="observacoes" value="{{old('observacoes')}}"></textarea><br>
	@if($errors->has('observacoes'))
		Deverá indicar um observações correto<br>
	@endif
	Imagem Capa: <input type="text" name="imagem_capa" value="{{old('imagem_capa')}}"><br>
	@if($errors->has('imagem_capa'))
		Deverá indicar uma imagem capa correta<br>
	@endif
	Género: <select name="id_genero">
				@foreach($generos as $genero)
					<option value="{{$genero->id_genero}}">{{$genero->designacao}}</option>
				@endforeach
			</select>
			<br>
	<!--<input type="text" name="id_genero" value="{{old('id_genero')}}"><br>
	@if($errors->has('id_genero'))
		Deverá indicar um id_genero correto<br>
	@endif-->
	Autor(es): <select name="id_autor[]" multiple="multiple">
				@foreach($autores as $autor)
					<option value="{{$autor->id_autor}}">{{$autor->nome}}</option>
				@endforeach
			</select>
			<br>
	
	Sinopse: <textarea name="sinopse" value="{{old('sinopse')}}"></textarea><br>
	@if($errors->has('sinopse'))
		Deverá indicar um sinopse correto<br>
	@endif
	Editora(s): <select name="id_editora">
				@foreach($editoras as $editora)
					<option value="{{$editora->id_editora}}">{{$editora->nome}}</option>
				@endforeach
			</select>
			<br>

	<input type="submit" name="enviar">
</form>