<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Validator;
use App\Models\Curso;


class CursoController extends Controller
{
  
    public function index(){
        return view('index');
    }
    public function mostrarFormCurso(){
        return view('cad_curso');
    }
    
    public function mostrarManipulaCurso(){
        $registrosCurso = Curso::All();
        return view('manipula_curso',['registrosCurso' => $registrosCurso]);
    }

    public function cadastroCurso(Request $request){
        $registrosCurso = $request->validate([
        'idcategoria' => 'required',
        'nomecurso' => 'string|required',
        'cargahoraria'=> 'string|required',
        'valor'=> 'string|required',
        ]);

        Curso::create($registrosCurso);

        return Redirect::route('index');
    }

    public function deleteCurso($id)
{
    $curso = Curso::findOrFail($id);
    $curso->delete();

    return Redirect::route('manipula-curso')->with('success', 'Curso excluído com sucesso!');
}

}
