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
}
