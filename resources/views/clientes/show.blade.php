@extends('templates.template')

@section('content')

    <h1 class="text-center">Visualizar Cliente</h1>

    <div class="col-8 m-auto">

        <!--ID-->
        ID:{{ $cliente->id }}<br>

        <!--COLETAR INFORMAÇÃO DE OUTRA TABELA-->
        @php
            $endereco=$cliente->find($cliente->id)->relEndereco;
        @endphp

        <!--MOSTRAR CONTEÚDO ESPECÍFICO-->
        Nome:{{$cliente->nome}}<br>
        CPF:{{$cliente->cpf}}<br>
        Telefone:{{$cliente->telefone}}<br>
        ID_Endereco:{{$cliente->id_endereco}}<br>

    </div>

    <!-- BOTÃO DE RETORNO -->
    <div class="text-md-right mt-3 m-4 fixed-bottom">
        <a href="{{ route('dashboard') }}">
            <button class="btn btn-light">Voltar</button>
        </a></div>
@stop
