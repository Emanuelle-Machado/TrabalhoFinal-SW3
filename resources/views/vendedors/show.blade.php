@extends('templates.template')

@section('content')

    <h1 class="text-center">Visualizar Vendedor</h1>

    <div class="col-8 m-auto">

        <!--ID-->
        ID:{{ $vendedor->id }}<br>

        <!--COLETAR INFORMAÇÃO DE OUTRA TABELA-->
        @php
            $user=$vendedor->find($vendedor->id)->relUsers;
        @endphp

        <!--MOSTRAR CONTEÚDO ESPECÍFICO-->
        ID_User:{{$vendedor->id_user}}<br>
        CPF:{{$vendedor->cpf}}<br>
        Telefone:{{$vendedor->telefone}}<br>
        Salário:{{$vendedor->salario}}<br>

    </div>

    <!-- BOTÃO DE RETORNO -->
    <div class="text-md-right mt-3 m-4 fixed-bottom">
        <a href="{{ route('dashboard') }}">
            <button class="btn btn-light">Voltar</button>
        </a></div>
@stop











