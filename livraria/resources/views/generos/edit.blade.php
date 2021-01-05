<form action="{{route('generos.update',['id'=>$genero->id_genero])}}" method="post">
	@csrf
	@method('patch')

	Designação<input type="text" name="designacao" value="{{$genero->designacao}}"><br>

	@if($errors->has('designacao'))
		Deverá ter no minimo 3 letras.
	@endif

	Observações<textarea name="observacoes">{{$genero->observacoes}}</textarea><br>
	<input type="submit" name="enviar">
</form>