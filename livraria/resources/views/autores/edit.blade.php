<form action="{{route('autores.update',['id'=>$autor->id_autor])}}" method="post">
	@csrf
	@method('patch')

	Nome<input type="text" name="nome" value="{{$autor->nome}}"><br>
	@if($errors->has('nome'))
		Deverá ter no minimo 5 letras.
	@endif
	Nacionalidade<input type="text" name="nacionalidade" value="{{$autor->nacionalidade}}"><br>
	Data nascimento<input type="date" name="data_nascimento" value="{{$autor->data_nascimento}}"><br>
	Fotografia<input type="text" name="fotografia" value="{{$autor->fotografia}}"><br>
	<input type="submit" name="enviar">
</form>