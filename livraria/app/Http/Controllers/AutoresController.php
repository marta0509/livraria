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

    public function create()
    {
        return view ('autores.create');
    }

    public function store(Request $request)
    {
        $novoAutor=$request->validate([
            'nome'=>['required','min:5','max:100'],
            'nacionalidade'=>['required','min:3','max:50'],
            'data_nascimento'=>['nullable','date'],
            'fotografia'=>['nullable'],
        ]);
    

    $autor=Autor::create($novoAutor);

    return redirect()->route('autores.show',[
        'id'=>$autor->id_autor
    ]);
    }
}
