<b>ID:</b>{{$autor->id_autor}}<br>
<b>Nome:</b>{{$autor->nome}}<br>
<b>Nacionalidade:</b>{{$autor->nacionalidade}}<br>
<b>Data:</b>{{$autor->data_nascimento}}<br>
<b>Fotografia:</b>{{$autor->fotografia}}<br>
@foreach($autor->livros as $livro)
<h5><b>Titulo do livro:</b>{{$livro->titulo}}</h5>
@endforeach
<a href="{{route('autores.edit',['id'=>$autor->id_autor])}}">Editar</a>
