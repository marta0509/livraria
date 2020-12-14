<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genero;

class GenerosController extends Controller
{
    //
    public function index(){
    	//$generos = Genero::paginate(4);

        $generos=Genero::all();
    	//$generos=Genero::all->sortbydesc('idg');
    	
    	return view ('generos.index', [
    		'generos'=>$generos
    	]);
    }

    public function show (Request $request){
        $idGenero = $request->id;

        //$genero = Genero::findOrFail($idGenero);
        //$genero = Genero::find($idGenero);
        //$genero = Genero::where('idg',$idGenero)->fist();

        $genero = Genero::where('id_genero',$idGenero)->with('livros')->first();

        return view ('generos.show',[
            'genero'=>$genero]);
    }
}
