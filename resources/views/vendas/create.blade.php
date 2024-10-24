@extends('templates.template')

@section('content')

    <h1 class="text-center">Cadastrar Venda</h1> <hr>

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
        <form name="formCad" id="formCad" method="post" action="{{route('vendas.store')}}">
            @csrf

            <!--SELEÇÃO DE CLIENTE-->
            <select class="form-control" name="id_cliente" id="id_cliente">
                <option value=""> Clientes </option>
                @foreach($clientes as $findCliente)
                    <option value="{{$findCliente->id}}">{{$findCliente->nome}}</option>
                @endforeach
            </select><br>

            <!--SELEÇÃO DE PRODUTO-->
            <select class="form-control" name="id_produto" id="id_produto">
                <option value=""> Produtos </option>
                @foreach($produtos as $findProduto)
                    <option value="{{$findProduto->id}}">{{$findProduto->nome}}</option>
                @endforeach
            </select><br>

            <!--SELEÇÃO DE VENDEDOR-->
            <select class="form-control" name="id_vendedor" id="id_vendedor">
                <option value=""> Vendedores </option>
                @foreach($vendedors as $findVendedor)
                    <option value="{{$findVendedor->id}}">{{$findVendedor->id_user}}</option>
                @endforeach
            </select><br>

        <!--BOTÃO DE CADASTRO-->
        <input class="btn btn-primary" type="submit" value="Cadastrar">

        </form>
    </div>

    <!-- BOTÃO DE RETORNO -->
    <div class="text-md-right mt-3 m-4 fixed-bottom">
        <a href="{{ route('dashboard') }}">
            <button class="btn btn-light">Voltar</button>
        </a></div>
@stop
