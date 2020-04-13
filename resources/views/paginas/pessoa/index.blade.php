@extends('layouts.app')

@section('site_title','Lista de Pessoas')

@section('content')
<div class="container">
  <h3 class="center mb-3 mt-5">Lista de Pessoas</h3>

  <div class="container">
    <div class="row">
      <div class="w-100 text-right">
        <a class="btn btn-primary mb-1" href="{{ route('reservas.pessoa.adicionar') }}">Adicionar</a>
      </div>
    </div>
    <div class="row">
      <table class = "table">
        <thead>
          <tr>
            <th>Identificação</th>
            <th>Nome</th>
            <th>Idade</th>
            <th class="text-center">Ação</th>
          </tr>
        </thead>
        <tbody>
          @foreach($registros as $registro)
          <tr>
            <td>{{ $registro->identificacao }}</td>
            <td>{{ $registro->nome }} {{ $registro->sobrenome }}</td>
            <td>{{ $registro->idade }}</td>
            <td class="text-center">
              <a class="btn btn-success" href="{{ route('reservas.pessoa.editar',$registro->id) }}">Editar</a>
              <a class="btn btn-danger" href="{{ route('reservas.pessoa.deletar',$registro->id) }}">Deletar</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <ul class="pagination">
      {{$registros->links()}}
    </ul>
  </div>

  @endsection