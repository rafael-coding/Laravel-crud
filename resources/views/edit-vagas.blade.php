@extends('layouts.app')

@section('content')

    <div class="conteiner-form">
        <div class="form-row mx-0">
            <form class="col-12" action="{{ route('vaga.update', ['vaga' => $vaga->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <h1 class="mb-5">Editar Dados da Vaga</h1>
                <div class="form-group col-md-12">
                    <label for="">Empresa</label>
                    <input class="form-control" type="text" name="empresa" value="{{ $vaga->empresa }}">
                </div>
                <div class="form-group col-md-12">
                    <label for="">Título</label>
                    <input class="form-control" type="text" name="titulo" value="{{ $vaga->titulo }}">
                </div>
                <div class="form-group col-md-12">
                    <label for="">Descrição</label>
                    <input class="form-control" type="text" name="descricao" value="{{ $vaga->descricao }}">
                </div>
                <div class="form-group col-md-12">
                    <label for="">Localização</label>
                    <input class="form-control" type="text" name="localizacao" value="{{ $vaga->localizacao }}">
                </div>
                <div class="form-group col-md-12">
                    <label for="">Nível</label>
                    <input class="form-control" type="text" name="nivel" value="{{ $vaga->nivel }}">
                </div>
                <div class="form-group col-lg-12">
                    <button class="btn btn-dual btn-primary"> <span> Salvar </span> </button>
                </div>
            </form>
        </div>
    </div>
@endsection
