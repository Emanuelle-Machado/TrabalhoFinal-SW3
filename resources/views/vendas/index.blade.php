@extends('templates.template')

@section('content')

    <h1 class="text-center"> Tabela de Vendas</h1> <hr>

    <!-- BOTÃO INSERIR PARA REALIZAR CADASTRO -->
    <div class="text-md-center mt-3 m-4">
        <a href="{{ route('vendas.create') }}">
            <button class="btn btn-success">Inserir</button>
        </a>
    </div>

    <!-- TABELA -->
    <div class="col-8 m-auto">
        @csrf
        <table class="table table-striped">

            <!-- CABEÇALHO DA TABELA -->
            <thead class="thead-light">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">ID_Cliente</th>
            <th scope="col">ID_Produto</th>
            <th scope="col">ID_Vendedor</th>
            <th scope="col">Action</th>
        </tr>
        </thead>

        <tbody>

        @foreach($vendas as $venda)
            <tr>
                <!-- ITENS JÁ CADASTRADOS DA TABELA -->
                <th scope="row">{{$venda->id}}</th>
                <td>{{ $venda->id_cliente }}</td>
                <td>{{ $venda->id_produto }}</td>
                <td>{{ $venda->id_vendedor }}</td>
                <td>
                    <!-- BOTÕES DE AÇÃO -->
                    <a href="{{ route('vendas.show', [$venda->id]) }}">
                        <button class="btn btn-dark">View</button>
                    </a>
                    <a href="{{ route('vendas.edit', [$venda->id]) }}">
                        <button class="btn btn-primary">Edit</button>
                    </a>
                    <a href="{{url("vendas/$venda->id")}}" class="js-del">
                        <button class="btn btn-danger">Delete</button>
                    <a/>

                </td>
            </tr>
        @endforeach

            </tbody>
        </table>
    </div>

    <!-- BOTÃO DE RETORNO -->
    <div class="text-md-right mt-3 m-4 fixed-bottom">
        <a href="{{ route('dashboard') }}">
            <button class="btn btn-light">Voltar</button>
        </a></div>
@endsection
