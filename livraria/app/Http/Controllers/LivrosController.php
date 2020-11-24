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
}