@extends('templates.template')

@section('content')

    <h1 class="text-center"> Editar Vendedor </h1>
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
        {{ Form::model($vendedor, array('route' => array('vendedors.update', $vendedor->id), 'method' => 'PUT')) }}
        @method('PUT')

        <!--SELEÇÃO DE USUÁRIO-->
        Usuário
        <select class="form-control" name="id_user" id="id_user">
            <option value="{{$vendedor->id_user ?? ''}} " required> Usuários </option>
            @foreach($users as $findUser)
                <option value="{{$findUser->id}}">{{$findUser->nome}}</option>
            @endforeach
        </select><br>

        <!--PREENCHER CPF-->
        CPF:
        <input class="form-control" type="text" name="cpf" id="cpf" placeholder="cpf:"
               value="{{$vendedor->cpf ?? ''}}" required><br>

        <!--PREENCHER TELEFONE-->
        Telefone:
        <input class="form-control" type="text" name="telefone" id="telefone" placeholder="telefone:"
               value="{{$vendedor->telefone ?? ''}} " required><br>

        <!--PREENCHER SALÁRIO-->
        Salário:
        <input class="form-control" type="text" name="salario" id="salario" placeholder="salario:"
               value="{{$vendedor->salario ?? ''}} " required><br>


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
