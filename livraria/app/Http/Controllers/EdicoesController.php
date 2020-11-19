<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Edicao;

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
        $id_editora = $request->id;

        $edicoes = Edicao::find($id_livro);
        $edicoes = Edicao::find($id_editora);


        return view ('edicoes.show',[
            'edicao'=>$edicao]);
    }
}
