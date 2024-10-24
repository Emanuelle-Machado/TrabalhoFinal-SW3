@extends('templates.template')

@section('content')

    <h1 class="text-center">Cadastrar Endereço</h1> <hr>

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
        <form name="formCad" id="formCad" method="post" action="{{route('enderecos.store')}}">
            @csrf

            <!--PREENCHER RUA-->
            <input class="form-control" type="text" name="rua" id="rua" placeholder="rua:"><br>

            <!--PREENCHER NÚMERO-->
            <input class="form-control" type="text" name="numero" id="numero" placeholder="numero:"><br>

            <!--PREENCHER CEP-->
            <input class="form-control" type="text" name="cep" id="cep" placeholder="cep:"><br>

            <!--PREENCHER CIDADE-->
            <input class="form-control" type="text" name="cidade" id="cidade" placeholder="cidade:"><br>

            <!--PREENCHER ESTADO-->
            <input class="form-control" type="text" name="estado" id="estado" placeholder="estado:"><br>

            <!--BOTÃO SUBMETER FORMULÁRIO-->
            <input class="btn btn-primary" type="submit" value="Cadastrar">
        </form>
    </div>

    <!-- BOTÃO DE RETORNO -->
    <div class="text-md-right mt-3 m-4 fixed-bottom">
        <a href="{{ route('dashboard') }}">
            <button class="btn btn-light">Voltar</button>
        </a></div>
@stop
