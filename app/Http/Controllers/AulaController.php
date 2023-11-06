<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Validator;
use App\Models\Aula;



class AulaController extends Controller
{
    public function index(){
        return view('index');
    }
    public function mostrarFormAula(){
        return view('cad_aula');
    }
    public function mostrarManipulaAula(){
        $registrosAula = Aula::All();
        return view('manipula_aula',['registrosAula' => $registrosAula]);
    }

    public function cadastroAula(Request $request){
        $registrosAula = $request->validate([
        'idcurso' => 'required',
        'tituloaula' => 'string|required',
        'urlaula'=> 'string|required',
        ]);

        Aula::create($registrosAula);

        return Redirect::route('index');
    }

    public function deleteAula($id) {
        $aula = Aula::findOrFail($id);
        $aula->delete();
        return Redirect::route('index');
    }
    
}
