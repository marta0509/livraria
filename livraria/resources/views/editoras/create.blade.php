<form action="{{route('editoras.store')}}" method="post">
	@csrf
	Nome<input type="text" name="nome" value="{{old('nome')}}"><br>
	@if($errors->has('nome'))
		Deverá ter no minimo 3 letras.
	@endif
	Morada<input type="text" name="morada"><br>
	Observações<textarea name="observacoes"></textarea><br>
	<input type="submit" name="enviar">
</form>