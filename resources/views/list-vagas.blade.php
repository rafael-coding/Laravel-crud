@extends('layouts.app')

@section('content')

    <div class="container conteiner-table">
      <h1 class="mb-5 text-center">Listagem das vagas</h1>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Empresa</th>
                <th scope="col">título</th>
                <th scope="col">Descrição</th>
                <th scope="col">Localização</th>
                <th scope="col">Nível</th>
                <th scope="col text-center">Ações</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($vagas as $vaga)
              <tr>
                <th scope="row">{{$vaga->empresa}}</th>
                <td>{{$vaga->titulo}}</td>
                <td>{{$vaga->descricao}}</td>
                <td>{{$vaga->localizacao}}</td>
                <td>{{$vaga->nivel}}</td>
                <td class="row"> 
                    <a href="{{ route('vaga.edit', ['vaga' => $vaga->id]) }}"> <i class="fas fa-edit text-secondary"></i> </a> 
                    <form action="{{ route('vaga.destroy', ['vaga' => $vaga->id]) }}" method="post">
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