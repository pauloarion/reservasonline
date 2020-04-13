@extends('layouts.app')

@section('content')
<div class="container" id="app">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="content">
                        <div id="carouselControls" class="carousel slide" data-ride="carousel">

                            <ol class="carousel-indicators">
                                @foreach( $registros as $registro )
                                <li data-target="#carouselIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                                @endforeach
                            </ol>

                            <div class="carousel-inner" role="listbox">
                                @foreach( $registros as $registro )
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <a href="{{ route('reservas.home.show',$registro->id) }}">
                                        <img height="600" width="800" class="d-block" src="{{asset('images/'.$registro->imagem)}}" alt="{{ $registro->nome }}">
                                    </a>
                                    <div class="carousel-caption d-none d-md-block">
                                        <h3>{{ $registro->nome }}</h3>
                                        <p>{{ $registro->nome }}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection