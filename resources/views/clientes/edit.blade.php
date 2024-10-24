@extends('templates.template')

@section('content')

    <h1 class="text-center"> Editar Cliente </h1>
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
        {{ Form::model($cliente, array('route' => array('clientes.update', $cliente->id), 'method' => 'PUT')) }}
        @method('PUT')

        <!--PREENCHER NOME-->
        Nome:
        <input class="form-control" type="text" name="nome" id="nome" placeholder="nome:"
               value="{{$cliente->nome ?? ''}}" required><br>

        <!--PREENCHER CPF-->
        CPF:
        <input class="form-control" type="text" name="cpf" id="cpf" placeholder="cpf:"
               value="{{$cliente->cpf ?? ''}}" required><br>

        <!--PREENCHER TELEFONE-->
        Telefone:
        <input class="form-control" type="text" name="telefone" id="telefone" placeholder="telefone:"
               value="{{$cliente->telefone ?? ''}} " required><br>

        <!--SELEÇÃO DE ENDEREÇO-->
        Endereço:
        <select class="form-control" name="id_endereco" id="id_endereco">
            <option value="{{$cliente->id_endereco ?? ''}} " required> Endereços </option>
            @foreach($enderecos as $findEndereco)
                <option value="{{$findEndereco->id}}">{{$findEndereco->rua}}</option>
            @endforeach
        </select><br>

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
