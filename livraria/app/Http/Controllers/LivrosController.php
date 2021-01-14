<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;
use App\Models\Genero;
use App\Models\Autor;
use App\Models\Editora;

class LivrosController extends Controller
{
    //

    public function index(){
    	//$livros = Livro::paginate(4);

        $livros=Livro::all();
    	//$livros=Livro::all->sortbydesc('idl');
    	
    	return view ('livros.index', [
    		'livros'=>$livros
    	]);
    }

    public function show (Request $request){
        $idLivro = $request->id;

        //$livro = Livro::findOrFail($idLivro);
        //$livro = Livro::find($idLivro);
        //$livro = Livro::where('idl',$idLivro)->fist();

        /*$livro = Livro::where('id_livro',$idLivro)->with('genero')->first();

        $livro = Livro::where('id_livro',$idLivro)->with('autor')->first();*/
        
        $livro = Livro::where('id_livro',$idLivro)->with(['genero','autores','autor','editoras'])->first();

        return view ('livros.show',[
            'livro'=>$livro]);
    }

    public function create()
    {
        $generos=Genero::all();
        $autores=Autor::all();
        $editoras=Editora::all();
        return view ('livros.create',[
            'generos'=>$generos,
            'autores'=>$autores,
            'editoras'=>$editoras]);
    }

    public function store(Request $request)
    {
        $novoLivro=$request->validate([
            'titulo'=>['required','min:3','max:100'],
            'idioma'=>['nullable','min:3','max:20'],
            'total_paginas'=>['nullable','numeric','min:1'],
            'data_edicao'=>['nullable','date'],
            'isbn'=>['required','min:13','max:13'],
            'observacoes'=>['nullable','min:3','max:255'],
            'imagem_capa'=>['nullable'],
            'id_genero'=>['numeric','nullable'],
            //'id_autor'=>['numeric','nullable'],
            'sinopse'=>['nullable','min:3','max:255'],
           
        ]);

        $autores=$request->id_autor;
        $editoras=$request->id_editora;
        $livro= Livro::create($novoLivro);
        $livro->autores()->attach($autores);
        $livro->editoras()->attach($editoras);

        return redirect()->route('livros.show',[
            'id'=>$livro->id_livro
        ]);
    }

    public function edit (Request $request)
    {
        $idLivro=$request->id;
        $generos=Genero::all();
        $autores=Autor::all();
        $editoras=Editora::all();
        $livro=Livro::where('id_livro',$idLivro)->with('autores','editoras')->first();
        $autoresLivro=[];
       
        //obter id_autor dos autores deste livro
        foreach ($livro->autores as $autor) 
        { 
            $autoresLivro[]=$autor->id_autor;
        } 

        $editorasLivro=[];
        foreach ($livro->editoras as $editora) 
        { 
            $editorasLivro[]=$editora->id_editora;
        }

        return view('livros.edit', ['livro'=>$livro,
            'generos'=>$generos,
            'autores'=>$autores,
            'editoras'=>$editoras,
            'autoresLivro'=>$autoresLivro,
            'editorasLivro'=>$editorasLivro]);
    }

    public function update (Request $request)
    {
        $idLivro=$request->id;
        $livro=Livro::findOrFail($idLivro);

        $atualizarLivro=$request->validate([
            'titulo'=>['required','min:3','max:100'],
            'idioma'=>['nullable','min:3','max:20'],
            'total_paginas'=>['nullable','numeric','min:1'],
            'data_edicao'=>['nullable','date'],
            'isbn'=>['required','min:13','max:13'],
            'observacoes'=>['nullable','min:3','max:255'],
            'imagem_capa'=>['nullable'],
            'id_genero'=>['numeric','nullable'],
            //'id_autor'=>['numeric','nullable'],
            'sinopse'=>['nullable','min:3','max:255'],
        ]);

        $autores=$request->id_autor;
        $livro->update($atualizarLivro);
        $livro->autores()->sync($autores);
        $livro->editoras()->sync($editoras);

        return redirect()->route('livros.show',['id'=>$livro->id_livro]);
    }

    public function delete (Request $request)
    {
        $idLivro=$request->id;
        $livro=Livro::where('id_livro',$idLivro)->first();
        return view ('livros.delete',['livro'=>$livro]);
    }

    public function destroy (Request $request)
    {
        $idLivro=$request->id;
        $livro=Livro::findOrFail($idLivro);
        $autoresLivro=Livro::findOrFail($idLivro)->autores;
        $livro->delete();

        return  redirect()->route('livros.index')->with('mensagem','Livro eliminado');
    }
}