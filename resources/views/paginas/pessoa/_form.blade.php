@if(isset($errors) && count($errors)>0)
    <div class="text-center mt-4 mb-4 p-2 alert-danger">
        @foreach($errors->all() as $erro)
            {{$erro}}<br>
        @endforeach
    </div>
@endif

<div class="form-row form-group">
  <div class="col-md-4">
    <label class="control-label" for="identificacao">CPF</label>
    <input type="text"class="form-control" name="identificacao" id="identificacao" placeholder="Número de Identificação: CPF, RG, etc.." value="{{old('identificacao',$registro->identificacao ?? '') }}">
  </div>
</div>

<div class="form-row form-group">
  <div class="col-md-4">
    <label class="control-label" for="nome">Nome</label>
    <input type="text"class="form-control" name="nome" id="nome" placeholder="Nome" value="{{old('nome',$registro->nome ?? '') }}">
  </div>

  <div class="col-md-4">
    <label class="control-label" for="sobrenome">Sobrenome</label>
    <input type="text"class="form-control" name="sobrenome" id="sobrenome" placeholder="Sobrenome" value="{{old('sobrenome',$registro->sobrenome ?? '') }}">
  </div>
</div>

<div class="form-row form-group">
  <div class="col-md-4">
    <label class="control-label">E-mail</label>
    <input type="email"class="form-control" name="email" id="email" placeholder="E-mail" value="{{old('email',$registro->email ?? '') }}">
  </div>

  <div class="col-md-4">
    <label class="control-label">Telefone</label>
    <input type="text"class="form-control" name="telefone" id="telefone" placeholder="Telefone ou celular" value="{{old('telefone',$registro->telefone ?? '') }}">
  </div>
</div>

<div class="form-row form-group">
  <div class="col-md-4">
    <label class="control-label">Data de Nascimento</label>
    <input type="text" class="datepicker form-control" name="nascimento_decorator"  placeholder="Data de nascimento" value="{{old('nascimento_decorator',$registro->nascimento_decorator ?? '') }}">
  </div>
</div>

