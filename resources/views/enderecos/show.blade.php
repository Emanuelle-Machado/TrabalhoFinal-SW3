@extends('templates.template')

@section('content')

    <h1 class="text-center">Visualizar Endereço</h1>

    <div class="col-8 m-auto">

        <!--ID-->
        ID:{{ $endereco->id }}<br>

        <!--MOSTRAR CONTEÚDO ESPECÍFICO-->
        Rua:{{$endereco->rua}}<br>
        Número:{{$endereco->numero}}<br>
        CEP:{{$endereco->cep}}<br>
        Cidade:{{$endereco->cidade}}<br>
        Estado:{{$endereco->estado}}<br>

    </div>

    <!-- BOTÃO DE RETORNO -->
    <div class="text-md-right mt-3 m-4 fixed-bottom">
        <a href="{{ route('dashboard') }}">
            <button class="btn btn-light">Voltar</button>
        </a></div>
@stop
