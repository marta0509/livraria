<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

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
        return view ('livros.create');
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
            'id_autor'=>['numeric','nullable'],
            'sinopse'=>['nullable','min:3','max:255'],
           
        ]);

        $livro= Livro::create($novoLivro);

        return redirect()->route('livros.show',[
            'id'=>$livro->id_livro
        ]);
    }
}