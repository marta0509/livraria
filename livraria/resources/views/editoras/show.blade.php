<b>ID:</b>{{$editora->id_editora 
}}<br>
<b>Nome:</b>{{$editora->nome}}<br>
<b>Morada:</b>{{$editora->morada}}<br>
<b>Observações:</b>{{$editora->observacao}}<br>


@if(auth()->check())
	<a href="{{route('editoras.edit',['id'=>$editora->id_editora])}}">Editar</a>
	<a href="{{route('editoras.delete',['id'=>$editora->id_editora])}}">Eliminar</a>
@endif