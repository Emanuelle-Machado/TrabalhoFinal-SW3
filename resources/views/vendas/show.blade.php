@extends('templates.template')

@section('content')

    <h1 class="text-center">Visualizar Venda</h1>

    <div class="col-8 m-auto">

        <!--ID-->
        ID:{{ $venda ->id }}<br>

        <!--COLETAR INFORMAÇÃO DE OUTRA TABELA-->
        @php
            $cliente=$venda->find($venda->id)->relCliente;
            $produto=$venda->find($venda->id)->relProduto;
            $vendedor=$venda->find($venda->id)->relVendedor;
        @endphp

        <!--MOSTRAR CONTEÚDO ESPECÍFICO-->
        ID_Cliente:{{$venda->id_cliente}}<br>
        ID_Produto:{{$venda->id_produto}}<br>
        ID_Vendedor:{{$venda->id_vendedor}}<br>

    </div>

    <!-- BOTÃO DE RETORNO -->
    <div class="text-md-right mt-3 m-4 fixed-bottom">
        <a href="{{ route('dashboard') }}">
            <button class="btn btn-light">Voltar</button>
        </a></div>
@stop
