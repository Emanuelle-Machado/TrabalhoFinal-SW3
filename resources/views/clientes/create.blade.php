@extends('templates.template')

@section('content')

    <h1 class="text-center">Cadastrar Cliente</h1> <hr>

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
        <form name="formCad" id="formCad" method="post" action="{{route('clientes.store')}}">
            @csrf

            <!--PREENCHER NOME-->
            <input class="form-control" type="text" name="nome" id="nome" placeholder="nome:"><br>

            <!--PREENCHER CPF-->
            <input class="form-control" type="text" name="cpf" id="cpf" placeholder="cpf:"><br>

            <!--PREENCHER TELEFONE-->
            <input class="form-control" type="text" name="telefone" id="telefone" placeholder="telefone:"><br>

            <!--SELEÇÃO DE ENDEREÇO-->
            <select class="form-control" name="id_endereco" id="id_endereco">
                <option value=""> Endereços </option>
                @foreach($enderecos as $findEndereco)
                    <option value="{{$findEndereco->id}}">{{$findEndereco->rua}}</option>
                @endforeach
            </select><br>

            <!--BOTÃO DE CADASTRO-->
            <input class="btn btn-primary" type="submit" value="Cadastrar">

        </form>
    </div>

    <!-- BOTÃO DE RETORNO -->
    <div class="text-md-right mt-3 m-4 fixed-bottom">
        <a href="{{ route('dashboard') }}">
            <button class="btn btn-light">Voltar</button>
        </a></div>
@stop
