@extends('templates.template')

@section('content')

    <h1 class="text-center"> Editar Endereço</h1>
    <hr>

    <!--ALERTA DE ERRO-->
	@if($errors->any())
		<div class="alert alert-danger">
			@foreach ($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

    <!--FORMULÁRIO-->
    <div class="col-8 m-auto">
        {{ Form::model($endereco, array('route' => array('enderecos.update', $endereco->id), 'method' => 'PUT')) }}
        @method('PUT')

        <!--PREENCHER RUA-->
        Rua:
        <input class="form-control" type="text" name="rua" id="rua" placeholder="Rua:"
               value="{{$endereco->rua ?? ''}}" required><br>

        <!--PREENCHER NÚMERO-->
        Número:
        <input class="form-control" type="text" name="numero" id="numero" placeholder="Numero:"
               value="{{$endereco->numero ?? ''}}" required><br>

        <!--PREENCHER CEP-->
        CEP:
        <input class="form-control" type="text" name="cep" id="cep" placeholder="CEP:"
               value="{{$endereco->cep ?? ''}}" required><br>

        <!--PREENCHER CIDADE-->
        Cidade:
        <input class="form-control" type="text" name="cidade" id="cidade" placeholder="cidade:"
               value="{{$endereco->cidade ?? ''}}" required><br>

        <!--PREENCHER ESTADO-->
        Estado:
        <input class="form-control" type="text" name="estado" id="estado" placeholder="estado:"
               value="{{$endereco->estado ?? ''}}" required><br>

        <!--BOTÃO SUBMETER FORMULÁRIO-->
        {{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}
    </div>

    <!-- BOTÃO DE RETORNO -->
    <div class="text-md-right mt-3 m-4 fixed-bottom">
        <a href="{{ route('dashboard') }}">
            <button class="btn btn-light">Voltar</button>
        </a></div>
@stop
