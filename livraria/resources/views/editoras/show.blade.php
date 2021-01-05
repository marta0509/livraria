<b>ID:</b>{{$editora->id_editora 
}}<br>
<b>Nome:</b>{{$editora->nome}}<br>
<b>Morada:</b>{{$editora->morada}}<br>
<b>Observações:</b>{{$editora->observacao}}<br>
<a href="{{route('editoras.edit',['id'=>$editora->id_editora])}}">Editar</a>