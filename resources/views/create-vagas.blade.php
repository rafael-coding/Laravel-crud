@extends('layouts.app')

@section('content')

    <div class="conteiner-form">
        <div class="form-row mx-0">
            <form class="col-12" action="{{ route('vaga.store') }}" method="POST">
                @csrf
                <h1 class="mb-5">Cadastrar Vagas</h1>
                <div class="form-group col-md-12">
                    <label for="">Empresa</label>
                    <input class="form-control" type="text" name="empresa">
                </div>
                <div class="form-group col-md-12">
                    <label for="">Título</label>
                    <input class="form-control" type="text" name="titulo">
                </div>
                <div class="form-group col-md-12">
                    <label for="">Descrição</label>
                    <input class="form-control" type="text" name="descricao">
                </div>
                <div class="form-group col-md-12">
                    <label for="">Localização</label>
                    <input class="form-control" type="text" name="localizacao">
                </div>
                <div class="form-group col-md-12">
                    <label for="">Nível</label>
                    <input class="form-control" type="text" name="nivel">
                </div>
                <div class="form-group col-lg-12">
                    <button class="btn btn-dual btn-primary"> <span> Cadastrar vaga </span> </button>
                </div>
            </form>
        </div>
    </div>
@endsection