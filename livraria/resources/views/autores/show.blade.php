<!--ID:{{$autor->id_autor}}<br>
Nome:{{$autor->nome}}<br>
Nacionalidade:{{$autor->nacionalidade}}<br>
Data:{{$autor->data_nascimento}}<br>
Fotografia:{{$autor->fotografia}}<br>-->
@foreach($autor->livros as $livro)
<h3>{{$livro->titulo}}</h3>
@endforeach

