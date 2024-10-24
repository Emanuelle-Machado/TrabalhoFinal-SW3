@extends('templates.template')

@section('content')

    <h1 class="text-center"> Editar Venda </h1>
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
        {{ Form::model($venda, array('route' => array('vendas.update', $venda->id), 'method' => 'PUT')) }}
        @method('PUT')

        <!--SELEÇÃO DE CLIENTE-->
        Cliente:
        <select class="form-control" name="id_cliente" id="id_cliente">
            <option value="{{$venda->id_cliente ?? ''}} " required> Clientes </option>
            @foreach($clientes as $findCliente)
                <option value="{{$findCliente->id}}">{{$findCliente->nome}}</option>
            @endforeach
        </select><br>

        <!--SELEÇÃO DE PRODUTO-->
        Produto:
        <select class="form-control" name="id_produto" id="id_produto">
            <option value="{{$venda->id_produto ?? ''}} " required> Produtos </option>
            @foreach($produtos as $findProduto)
                <option value="{{$findProduto->id}}">{{$findProduto->nome}}</option>
            @endforeach
        </select><br>

        <!--SELEÇÃO DE VENDEDOR-->
        Vendedor:
        <select class="form-control" name="id_vendedor" id="id_vendedor">
            <option value="{{$venda->id_vendedor ?? ''}} " required> Vendedores </option>
            @foreach($vendedors as $findVendedor)
                <option value="{{$findVendedor->id}}">{{$findVendedor->nome}}</option>
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
