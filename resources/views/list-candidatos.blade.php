@extends('layouts.app')

@section('content')

    <div class="container conteiner-table">
      <h1 class="mb-5 text-center">Listagem dos Candidatos</h1>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Nome</th>
                <th scope="col">Profissão</th>
                <th scope="col">Localização</th>
                <th scope="col">Nível</th>
                <th scope="col text-center">Ações</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($candidato as $candidato)
              <tr>
                <th scope="row">{{$candidato->nome}}</th>
                <td>{{$candidato->profissao}}</td>
                <td>{{$candidato->localizacao}}</td>
                <td>{{$candidato->nivel}}</td>
                <td class="row"> 
                    <a href="{{ route('candidato.edit', ['candidato' => $candidato->id]) }}"> <i class="fas fa-edit text-secondary"></i> </a> 
                    <form action="{{ route('candidato.destroy', ['candidato' => $candidato->id]) }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn-trash" type="subimit"> <i class="fas fa-trash-alt text-danger"></i> </button>
                    </form>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
    </div>
@endsection