<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Edicao;

use Auth;

class EdicoesController extends Controller
{
    //
    public function index(){

        $edicoes=Edicao::all();
    	
    	return view ('edicoes.index', [
    		'edicoes'=>$edicoes
    	]);
    }

    public function show (Request $request){
        $id_livro = $request->id;


        $edicoes = Edicao::find($id_livro);
        //$edicoes = Edicao::where('id_livro',$idLivro)->where('id_editora',$id_editora)->fist();

        return view ('edicoes.show',[
            'edicao'=>$edicoes]);
    }
}
