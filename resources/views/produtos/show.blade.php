@extends('templates.template')

@section('content')

    <h1 class="text-center">Visualizar Produto</h1>

    <div class="col-8 m-auto">

        <!--ID-->
        ID:{{ $produto->id }}<br>

        <!--COLETAR INFORMAÇÃO DE OUTRA TABELA-->
        @php
            $categoria=$produto->find($produto->id)->relCategoria;
        @endphp

        <!--MOSTRAR CONTEÚDO ESPECÍFICO-->
        Nome:{{$produto->nome}}<br>
        Preço:{{$produto->preco}}<br>
        ID_Categoria:{{$produto->id_categoria}}<br>

    </div>

    <!-- BOTÃO DE RETORNO -->
    <div class="text-md-right mt-3 m-4 fixed-bottom">
        <a href="{{ route('dashboard') }}">
            <button class="btn btn-light">Voltar</button>
        </a></div>
@stop
