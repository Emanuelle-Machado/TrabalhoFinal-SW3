@extends('templates.template')

@section('content')

    <h1 class="text-center">Cadastrar Categoria</h1> <hr>

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
        <form name="formCad" id="formCad" method="post" action="{{route('categorias.store')}}">
            @csrf

        <!--PREENCHER NOME-->
        <input class="form-control" type="text" name="nome" id="nome" placeholder="nome:"><br>

        <!--PREENCHER DESCRIÇÃO-->
        <input class="form-control" type="text" name="descricao" id="descricao" placeholder="descricao:"><br>

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
