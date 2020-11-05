<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editora;

class EditorasController extends Controller
{
    //
    public function index(){
    	$editoras = Editora::paginate(4);

        //$editoras=Editora::all();
    	//$editoras=Editora::all->sortbydesc('ide');
    	
    	return view ('editoras.index', [
    		'editoras'=>$editoras
    	]);
    }

    public function show (Request $request){
        $idEditora = $request->id;

        //$editora = Editora::findOrFail($idEditora);
          $editora = Editora::find($idEditora);
        //$editora = Editora::where('ide',$idEditora)->fist();

        return view ('editoras.show',[
            'editora'=>$editora]);
    }
}
