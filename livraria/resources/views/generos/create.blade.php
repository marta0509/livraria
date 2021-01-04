<form action="{{route('generos.store')}}" method="post">
	@csrf
	Designação<input type="text" name="designacao" value="{{old('designacao')}}"><br>
	@if($errors->has('designacao'))
		Deverá ter no minimo 3 letras.
	@endif
	Observações<textarea name="observacoes"></textarea><br>
	<input type="submit" name="enviar">
</form>