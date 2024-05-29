<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Centro_de_formacao;
use App\Models\Curso;

class CursoController extends Controller
{

public function store(Centro_de_formacao $centros_de_formaco)

{

        if (!isset($_SERVER['PHP_AUTH_USER'])) {
            header('WWW-Authenticate: Basic realm="My Website"');
            header('HTTP/1.0 401 Unauthorized');
            echo '<p>🤚 Não pode aceder esta pagina porque não acesso a esta universidade se persistir será reportado  </p>';
            exit; 
        }

            
        if ($_SERVER['PHP_AUTH_PW'] == 'ula' && $_SERVER['PHP_AUTH_USER'] == 'ula') {
            echo '<p>Access granted. You know the password!</p>';
            $curso = new Curso();
            $curso->centro_de_formacao_id = $centros_de_formaco->id;
            $curso->cadeiras = request()->get('cadeiras');
            $curso->data = request()->get('data');
            $curso->documentos = request()->get('documentos');
            $curso->tempo_de_duracao = request()->get('tempo_de_duracao');
            $curso->precario = request()->get('precario');
            $curso->semestre = request()->get('semestre');
            $curso->save();

            return redirect()->route('centros_de_formacoes.show', $centros_de_formaco->id);
        } else {
            echo '<p>🤚 Não pode aceder esta pagina porque não acesso a esta universidade se persistir será reportado  </p>';
        } 


}

    public function update(Request $request, Centro_de_formacao $centros_de_formaco)
    { 
        $request->validate([
            'cadeiras' => 'required',
            'data' => 'required',  
            'documentos' => 'required',
            'tempo_de_duracao' => 'required',
            'precario' => 'required',
            'semestre' => 'required',
        
        ]);            
    
        $centros_de_formaco->update($request->all());
    
            return redirect()->route('centros_de_formacoes.show', $centros_de_formaco->id);
    }


//
}
