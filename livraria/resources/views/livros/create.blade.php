<form action="{{route('livros.create')}}" method="post">
	@csrf
	Título: <input type="text" name="titulo"><br>
	Idioma: <input type="text" name="idioma"><br>
	Total Páginas: <input type="text" name="total_paginas"><br>
	Data Edições: <input type="text" name="data_edicao"><br>
	ISBN: <input type="text" name="isbn"><br>
	Observações: <textarea name="observacoes"></textarea><br>
	Imagem Capa: <input type="text" name="imagem_capa"><br>
	Género: <input type="text" name="id_genero"><br>
	Autor: <input type="text" name="id_autor"><br>
	Sinopse: <textarea name="sinopse"></textarea><br>

	<input type="submit" name="enviar">
</form>