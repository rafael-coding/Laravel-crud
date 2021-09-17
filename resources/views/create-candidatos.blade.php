@extends('layouts.app')

@section('content')

    <div class="conteiner-form">
        <div class="form-row mx-0">
            <form class="col-12" action="{{ route('candidato.store') }}" method="POST">
                @csrf
                <h1 class="mb-5">Cadastrar Candidatos</h1>
                <div class="form-group col-md-12">
                    <label for="">Nome</label>
                    <input class="form-control" type="text" name="nome">
                </div>
                <div class="form-group col-md-12">
                    <label for="">Profissão</label>
                    <input class="form-control" type="text" name="profissao">
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
                    <button class="btn btn-dual btn-primary"> <span> Cadastrar candidato </span> </button>
                </div>
            </form>
        </div>
    </div>
@endsection
