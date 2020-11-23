<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;

class AutoresController extends Controller
{
    //
    public function index(){
    	//$autores = Autor::paginate(4);

        $autores=Autor::all();
    	//$autores=Autor::all->sortbydesc('ida');
    	
    	return view ('autores.index', [
    		'autores'=>$autores
    	]);
    }

    public function show (Request $request){
        $idAutor = $request->id;

        //$autor = Autor::findOrFail($idAutor);
        //$autor = Autor::find($idAutor);
        //$autor = Autor::where('idl',$idAutor)->fist();

        $autor = Autor::where('id_autor',$idAutor)->with('livros')->first();

        return view ('autores.show',[
            'autor'=>$autor]);
    }
}
