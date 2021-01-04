<form action="{{route('autores.store')}}" method="post">
	@csrf
	Nome<input type="text" name="nome" value="{{old('nome')}}"><br>
	@if($errors->has('nome'))
		Deverá ter no minimo 5 letras.
	@endif
	Nacionalidade<input type="text" name="nacionalidade"><br>
	Data nascimento<input type="date" name="data_nascimento"><br>
	Fotografia<input type="text" name="fotografia"><br>
	<input type="submit" name="enviar">
</form>