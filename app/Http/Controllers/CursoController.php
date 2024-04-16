<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Centro_de_formacao;
use App\Models\Curso;

class CursoController extends Controller
{

public function store(Centro_de_formacao $centros_de_formaco)

{
$curso = new Curso();
$curso->centro_de_formacao_id = $centros_de_formaco->id;
$curso->cadeiras = request()->get('cadeiras');
$curso->data = request()->get('data');
$curso->horario = request()->get('horario');
$curso->tempo_de_duracao = request()->get('tempo_de_duracao');
$curso->precario = request()->get('precario');
$curso->save();

return redirect()->route('centros_de_formacoes.show', $centros_de_formaco->id);
}

    //
}
