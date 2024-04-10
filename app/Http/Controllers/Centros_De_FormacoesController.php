<?php

namespace App\Http\Controllers;

use App\Models\Centro_de_formacao;
use Illuminate\Http\Request;

class Centros_De_FormacoesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $centros_de_formacoes = Centro_de_formacao::latest()->paginate(20);

        return view('centros_de_formacoes.index',compact('centros_de_formacoes'))
            ->with(request()->input('page'));        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('centros_de_formacoes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'localizacao' => 'required',
            'vagas' => 'required',
            'imglink' => 'required',
        ]);

        Centro_de_formacao::create($request->all());

        return redirect()->route('centros_de_formacoes.index')
                         ->with('success','Centro de formação Criado');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Centro_de_formacao $centros_de_formaco)
    {
   
 
    return view ('centros_de_formacoes.show' 
    ,compact('centros_de_formaco'));
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Centro_de_formacao $centros_de_formaco)
    {
            return view('centros_de_formacoes.edit',
            compact('centros_de_formaco'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Centro_de_formacao $centro_de_formacao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Centro_de_formacao $centros_de_formaco)
    {
    $centro->delete();
    return redirect()->route('centros_de_formacoes.index')
                        ->with('success','Produto apagado');
    
    }
}
