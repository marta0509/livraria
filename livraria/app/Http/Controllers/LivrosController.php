<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivrosController extends Controller
{
    //

    public function index(){
    	$livros = Livro::paginate(4);

        //$livros=Livro::all();
    	//$livros=Livro::all->sortbydesc('idl');
    	
    	return view ('livros.index', [
    		'livros'=>$livros
    	]);
    }
}
