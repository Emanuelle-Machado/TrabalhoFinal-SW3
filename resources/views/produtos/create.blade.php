@extends('templates.template')

@section('content')

    <h1 class="text-center">Cadastrar Produto</h1> <hr>

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
        <form name="formCad" id="formCad" method="post" action="{{route('produtos.store')}}">
            @csrf

        <!--PREENCHER NOME-->
        <input class="form-control" type="text" name="nome" id="nome" placeholder="nome:"><br>

        <!--PREENCHER PREÇO-->
        <input class="form-control" type="text" name="preco" id="preco" placeholder="preco:"><br>

        <!--SELEÇÃO DE ENDEREÇO-->
        <select class="form-control" name="id_categoria" id="id_categoria">
            <option value=""> Categorias </option>
            @foreach($categorias as $findCategoria)
                <option value="{{$findCategoria->id}}">{{$findCategoria->nome}}</option>
            @endforeach
        </select><br>

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
