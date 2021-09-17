@extends('layouts.app')

@section('content')

    <div class="conteiner-form">
        <div class="form-row mx-0">
            <form class="col-12" action="{{ route('candidato.update', ['candidato' => $candidato->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <h1 class="mb-5">Editar Dados do Candidato</h1>
                <div class="form-group col-md-12">
                    <label for="">Nome</label>
                    <input class="form-control" type="text" name="nome" value="{{ $candidato->nome }}">
                </div>
                <div class="form-group col-md-12">
                    <label for="">Profissão</label>
                    <input class="form-control" type="text" name="profissao" value="{{ $candidato->profissao }}">
                </div>
                <div class="form-group col-md-12">
                    <label for="">Localização</label>
                    <input class="form-control" type="text" name="localizacao" value="{{ $candidato->localizacao }}">
                </div>
                <div class="form-group col-md-12">
                    <label for="">Nível</label>
                    <input class="form-control" type="text" name="nivel" value="{{ $candidato->nivel }}">
                </div>
                <div class="form-group col-lg-12">
                    <button class="btn btn-dual btn-primary"> <span> Salvar </span> </button>
                </div>
            </form>
        </div>
    </div>
@endsection