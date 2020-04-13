@extends('layouts.app')

@section('site_title','Adicionar Pessoa')

@section('content')
<div class="container">
  <h3 class="center mb-3 mt-5">Adicionar Pessoa</h3>
  <div class="container">
    <div class="row">
      <form class="w-100" action="{{route('reservas.pessoa.salvar')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include('paginas.pessoa._form')
        <button class="btn btn-primary" type="submit">Salvar</button>
      </form>
    </div>
  </div>
</div>
@endsection