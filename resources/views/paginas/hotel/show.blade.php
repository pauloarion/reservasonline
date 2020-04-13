@extends('layouts.app')

@section('content')
<div class="container" id="app">
    <div class="row justify-content-center">


        <div class="row">
            <div class="col-sm-9">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Hotel {{ $hotel->nome }}</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <img height="600" width="800" class="d-block" src="{{asset('images/'.$hotel->imagem)}}" alt="{{ $hotel->nome }}">
                        <a href="#" class="btn btn-primary">Detalhes</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Iaculis urna id volutpat lacus laoreet non curabitur. Suspendisse interdum consectetur libero id faucibus nisl tincidunt eget. Aliquam nulla facilisi cras fermentum odio eu feugiat pretium. In egestas erat imperdiet sed. Lectus nulla at volutpat diam ut venenatis tellus. At auctor urna nunc id cursus metus. Est placerat in egestas erat imperdiet. Accumsan tortor posuere ac ut consequat semper viverra nam. Eget sit amet tellus cras adipiscing. Cras ornare arcu dui vivamus arcu felis bibendum ut tristique. At risus viverra adipiscing at in tellus integer feugiat scelerisque. Pretium fusce id velit ut tortor pretium. Ultrices mi tempus imperdiet nulla malesuada. Hendrerit gravida rutrum quisque non tellus orci. Elementum sagittis vitae et leo duis ut diam. At lectus urna duis convallis convallis tellus id interdum. Faucibus vitae aliquet nec ullamcorper sit amet risus.

Phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet. Vel orci porta non pulvinar neque laoreet suspendisse. Vitae et leo duis ut diam quam nulla porttitor. Malesuada pellentesque elit eget gravida cum sociis natoque penatibus et. Arcu non odio euismod lacinia at quis risus sed. Ipsum dolor sit amet consectetur adipiscing elit ut aliquam purus. Tellus molestie nunc non blandit massa enim nec. Nibh nisl condimentum id venenatis a condimentum vitae. A iaculis at erat pellentesque adipiscing commodo elit at. Non tellus orci ac auctor augue mauris. Neque laoreet suspendisse interdum consectetur. Velit aliquet sagittis id consectetur purus ut faucibus pulvinar.

Condimentum vitae sapien pellentesque habitant. Adipiscing diam donec adipiscing tristique. Nibh venenatis cras sed felis. Tristique senectus et netus et. Nisl rhoncus mattis rhoncus urna neque viverra justo. Orci phasellus egestas tellus rutrum tellus. Mauris vitae ultricies leo integer malesuada nunc. Consequat nisl vel pretium lectus. Arcu dictum varius duis at consectetur lorem donec massa. Eget sit amet tellus cras adipiscing enim eu turpis. Commodo quis imperdiet massa tincidunt nunc pulvinar sapien et. Suscipit tellus mauris a diam maecenas sed enim ut. Mauris sit amet massa vitae tortor condimentum lacinia quis vel. Aliquet risus feugiat in ante. Est ullamcorper eget nulla facilisi etiam dignissim diam. Iaculis urna id volutpat lacus laoreet. Pellentesque habitant morbi tristique senectus et netus et malesuada. Volutpat est velit egestas dui id ornare arcu odio ut. Blandit cursus risus at ultrices mi.

Risus at ultrices mi tempus. Sed vulputate mi sit amet mauris commodo quis. Nibh cras pulvinar mattis nunc. Imperdiet proin fermentum leo vel orci porta non pulvinar neque. Tortor id aliquet lectus proin. Pharetra pharetra massa massa ultricies mi quis hendrerit. Facilisis mauris sit amet massa vitae tortor. Pretium viverra suspendisse potenti nullam ac. Malesuada fames ac turpis egestas sed tempus urna et pharetra. Scelerisque mauris pellentesque pulvinar pellentesque. Vitae nunc sed velit dignissim sodales ut eu sem. Integer vitae justo eget magna fermentum. Orci phasellus egestas tellus rutrum tellus. Arcu cursus euismod quis viverra nibh cras pulvinar mattis nunc. Risus in hendrerit gravida rutrum quisque non tellus orci ac. Nec ultrices dui sapien eget mi proin sed libero. Cum sociis natoque penatibus et. Arcu felis bibendum ut tristique et.

Mi proin sed libero enim sed faucibus turpis in. Non sodales neque sodales ut etiam sit. Varius quam quisque id diam. Non odio euismod lacinia at quis risus sed vulputate odio. Tincidunt augue interdum velit euismod in pellentesque massa placerat. Egestas pretium aenean pharetra magna ac. Enim eu turpis egestas pretium aenean pharetra magna ac. Vitae aliquet nec ullamcorper sit amet risus nullam eget felis. Adipiscing elit duis tristique sollicitudin nibh sit amet commodo. Mauris rhoncus aenean vel elit scelerisque. Gravida quis blandit turpis cursus in hac habitasse. Ut consequat semper viverra nam. Hac habitasse platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper. Non pulvinar neque laoreet suspendisse interdum consectetur libero id faucibus. Phasellus vestibulum lorem sed risus ultricies tristique nulla aliquet. Urna porttitor rhoncus dolor purus non enim praesent. Consequat nisl vel pretium lectus quam. Sit amet commodo nulla facilisi nullam. Viverra adipiscing at in tellus integer feugiat scelerisque varius. Blandit massa enim nec dui nunc.</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
            @foreach( $hotel->quartos as $quarto )
        
            
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Quarto {{ $quarto->nome }}</h5>
                        <p class="card-text">Lorem ipsum.</p>
                        <img height="100" width="200" class="d-block" src="{{asset('images/'.$quarto->imagem)}}" alt="{{ $quarto->nome }}">
                        <a href="#" class="btn btn-primary">Reservar</a>
                    </div>
                </div>
            
        
        @endforeach
        </div>
        </div>
        
    </div>
</div>
@endsection