<?php

namespace App\Http\Controllers;

use App\Models\Vaga;
use Illuminate\Http\Request;

class VagaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vagas = Vaga::all();

        return view ('list-vagas', ['vagas' => $vagas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('create-vagas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vaga = new Vaga();
        $vaga->empresa = $request->empresa;
        $vaga->titulo = $request->titulo;
        $vaga->descricao = $request->descricao;
        $vaga->localizacao = $request->localizacao;
        $vaga->nivel = $request->nivel;
        $vaga->save();

        //dd($request);

        return redirect()->route('vaga.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vaga  $vaga
     * @return \Illuminate\Http\Response
     */
    public function show(Vaga $vaga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vaga  $vaga
     * @return \Illuminate\Http\Response
     */
    public function edit(Vaga $vaga)
    {
        return view ('edit-vagas', ['vaga' => $vaga]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vaga  $vaga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vaga $vaga)
    {
        if(!empty($request->empresa || $request->titulo || $request->descricao || $request->localizacao ||$request->nivel)){
            $vaga->empresa = $request->empresa;
            $vaga->titulo = $request->titulo;
            $vaga->descricao = $request->descricao;
            $vaga->localizacao = $request->localizacao;
            $vaga->nivel = $request->nivel;
        };
        $vaga->save();

        return redirect()->route('vaga.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vaga  $vaga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vaga $vaga)
    {

        $vaga->delete();

        //dd($vaga);
        
        return redirect()->route('vaga.index');

    }
}
