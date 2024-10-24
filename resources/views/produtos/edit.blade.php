@extends('templates.template')

@section('content')

    <h1 class="text-center"> Editar Produto </h1>
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
        {{ Form::model($produto, array('route' => array('produtos.update', $produto->id), 'method' => 'PUT')) }}
        @method('PUT')

        <!--PREENCHER NOME-->
        Nome:
        <input class="form-control" type="text" name="nome" id="nome" placeholder="nome:"
               value="{{$produto->nome ?? ''}}" required><br>

        <!--PREENCHER PREÇO-->
        Preço:
        <input class="form-control" type="text" name="preco" id="preco" placeholder="preco:"
               value="{{$produto->preco ?? ''}}" required><br>

        <!--SELEÇÃO DE CATEGORIA-->
        Categoria:
        <select class="form-control" name="id_categoria" id="id_categoria">
            <option value="{{$produto->id_categoria ?? ''}} " required> Categorias </option>
            @foreach($categorias as $findCategoria)
                <option value="{{$findCategoria->id}}">{{$findCategoria->nome}}</option>
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
