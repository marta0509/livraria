<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editora;

class EditorasController extends Controller
{
    //
    public function index(){
    	//$editoras = Editora::paginate(4);

        $editoras=Editora::all();
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

    public function create(){
        return view ('editoras.create');
    }

    public function store(Request $request)
    {
        $novoEditora=$request->validate([
            'nome'=>['required','min:3','max:100'],
            'morada'=>['required','min:5','max:100'],
            'observacoes'=>['nullable'],
        ]);

        $editora=Editora::create($novoEditora);

        return redirect()->route('editoras.show',[
            'id'=>$editora->id_editora
        ]);
    }

    public function edit (Request $request)
    {
        $idEditora=$request->id;
        $editora=Editora::where('id_editora',$idEditora)->first();

        return view('editoras.edit', ['editora'=>$editora]);
    }

    public function update (Request $request)
    {
        $idEditora=$request->id;
        $editora=Editora::findOrFail($idEditora);

        $atualizarEditora=$request->validate([
            'nome'=>['required','min:3','max:100'],
            'morada'=>['required','min:5','max:100'],
            'observacoes'=>['nullable'],
        ]);

        $editora->update($atualizarEditora);

        return redirect()->route('editoras.show',['id'=>$editora->id_editora]);
    }

    public function delete (Request $request)
    {
        $idEditora=$request->id;
        $editora=Editora::where('id_editora',$idEditora)->first();
        return view ('editoras.delete',['editora'=>$editora]);
    }

    public function destroy (Request $request)
    {
        $idEditora=$request->id;
        $editora=Editora::findOrFail($idEditora);
        $editora->delete();

        return  redirect()->route('editoras.index')->with('mensagem','Editora eliminada');
    }
}
