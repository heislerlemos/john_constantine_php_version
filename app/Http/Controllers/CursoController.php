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

    public function update(Request $request, $curso_id)
    { 
        $cursos = Curso::find($curso_id);


        $cadeiras = $request -> cadeiras;
        $data = $request -> data;
        //$documentos = $request -> documentos;
        $tempo_de_duracao = $request -> tempo_de_duracao;
        $precario =  $request -> precario;
        // $semestre =  $request ->semestre; 

        $cursos -> cadeiras = $cadeiras;
        $cursos -> data = $data;
        //  $cursos -> documentos =  $documentos ;
        $cursos -> tempo_de_duracao = $tempo_de_duracao;
        $cursos -> precario = $precario;
        // $cursos -> semestre = $semestre;
        $cursos->save();

        return redirect()->route('centros_de_formacoes.show', $centros_de_formaco->id);
    }

    public function destroy($id)
    {
        $curso = Curso::where('id', $id)->first();
        $curso->delete();
        return redirect()->back();
    }
    //
}
