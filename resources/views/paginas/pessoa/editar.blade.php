@extends('layouts.app')

@section('site_title','Editar Pessoa')

@section('content')
<div class="container">
  <h3 class="center mb-3 mt-5">Editar Pessoa</h3>
  <div class="container">
    <div class="row">
      <form class="w-100" action="{{route('reservas.pessoa.atualizar',$registro)}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @method('PUT')
        @include('paginas.pessoa._form')
        <button class="btn btn-primary" type="submit">Atualizar</button>
      </form>
    </div>
  </div>
</div>


@endsection