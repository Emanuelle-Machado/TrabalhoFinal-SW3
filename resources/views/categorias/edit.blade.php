@extends('templates.template')

@section('content')

    <h1 class="text-center"> Editar Categoria </h1>
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
	{{ Form::model($categoria, array('route' => array('categorias.update', $categoria->id), 'method' => 'PUT')) }}
    @method('PUT')

    <!--PREENCHER NOME-->
    Nome:
    <input class="form-control" type="text" name="nome" id="nome" placeholder="nome:"
           value="{{$categoria->nome ?? ''}}" required><br>

    <!--PREENCHER DESCRIÇÃO-->
    Descrição:
    <input class="form-control" type="text" name="descricao" id="descricao" placeholder="descricao:"
           value="{{$categoria->descricao ?? ''}}" required><br>

    <!--BOTÃO SUBMETER FORMULÁRIO-->
    {{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}

    <!-- BOTÃO DE RETORNO -->
    <div class="text-md-right mt-3 m-4 fixed-bottom">
        <a href="{{ route('dashboard') }}">
            <button class="btn btn-light">Voltar</button>
        </a></div>
@stop
