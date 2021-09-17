<?php

namespace App\Http\Controllers;

use App\Models\Candidato;
use Illuminate\Http\Request;

class CandidatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidato = Candidato::all();

        return view ('list-candidatos', ['candidato' => $candidato]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('create-candidatos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);

        $candidato = new Candidato();
        $candidato->nome = $request->nome;
        $candidato->profissao = $request->profissao;
        $candidato->localizacao = $request->localizacao;
        $candidato->nivel = $request->nivel;
        $candidato->save();

        return redirect()->route('candidato.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function show(Candidato $candidato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidato $candidato)
    {
        return view ('edit-candidatos', ['candidato' => $candidato]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidato $candidato)
    {

        //dd($candidato);
            $candidato->nome = $request->nome;
            $candidato->profissao = $request->profissao;
            $candidato->localizacao = $request->localizacao;
            $candidato->nivel = $request->nivel;
            $candidato->save();

        return redirect()->route('candidato.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Candidato  $candidato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidato $candidato)
    {
        $candidato->delete();

        return redirect()->route('candidato.index');
    }
}
