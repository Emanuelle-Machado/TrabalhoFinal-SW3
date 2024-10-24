@extends('templates.template')

@section('content')

    <h1 class="text-center">Visualizar Categoria</h1>

    <div class="col-8 m-auto">

        <!--ID-->
        ID:{{ $categoria->id }}<br>

        <!--MOSTRAR CONTEÚDO ESPECÍFICO-->
        Nome:{{$categoria->nome}}<br>
        Descrição:{{$categoria->descricao}}<br>

    </div>

    <!-- BOTÃO DE RETORNO -->
    <div class="text-md-right mt-3 m-4 fixed-bottom">
        <a href="{{ route('dashboard') }}">
            <button class="btn btn-light">Voltar</button>
        </a></div>
@stop
