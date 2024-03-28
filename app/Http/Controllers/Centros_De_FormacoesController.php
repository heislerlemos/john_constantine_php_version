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
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('centros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Centro_de_formacao $centro_de_formacao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Centro_de_formacao $centro_de_formacao)
    {
        //
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
    public function destroy(Centro_de_formacao $centro_de_formacao)
    {
        //
    }
}
