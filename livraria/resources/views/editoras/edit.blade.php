<form action="{{route('editoras.update',['id'=>$editora->id_editora])}}" method="post">
	@csrf
	@method('patch')
	Nome<input type="text" name="nome" value="{{$editora->nome}}"><br>
	@if($errors->has('nome'))
		Deverá ter no minimo 3 letras.
	@endif
	Morada<input type="text" name="morada" value="{{$editora->morada}}"><br>
	Observações<textarea name="observacoes">{{$editora->observacoes}}</textarea><br>
	<input type="submit" name="enviar">
</form>