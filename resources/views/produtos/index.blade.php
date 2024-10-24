@extends('templates.template')

@section('content')

    <h1 class="text-center"> Tabela de Produtos</h1> <hr>

    <!-- BOTÃO INSERIR PARA REALIZAR CADASTRO -->
	<div class="text-md-center mt-3 m-4">
        <a href="{{ route('produtos.create') }}">
            <button class="btn btn-success">Inserir</button>
        </a></div>

    <!-- TABELA -->
    <div class="col-8 m-auto">
        @csrf
        <table class="table table-striped">

            <!-- CABEÇALHO DA TABELA -->
            <thead class="thead-light">
            <tr>
				<th scope="col">ID</th>
				<th scope="col">Nome</th>
				<th scope="col">Preco</th>
                <th scope="col">ID_Categoria</th>
				<th scope="col">Action</th>
			</tr>
		</thead>

		<tbody>

			@foreach($produtos as $produto)
				<tr>
                    <!-- ITENS JÁ CADASTRADOS DA TABELA -->
					<td scope="row">{{ $produto->id }}</td>
					<td>{{ $produto->nome }}</td>
					<td>{{ $produto->preco }}</td>
                    <td>{{ $produto->id_categoria }}</td>
					<td>
                        <!-- BOTÕES DE AÇÃO -->
                        <a href="{{ route('produtos.show', [$produto->id]) }}">
                            <button class="btn btn-dark">View</button>
                        </a>
                        <a href="{{ route('produtos.edit', [$produto->id]) }}">
                            <button class="btn btn-primary">Edit</button>
                        </a>
                        <a href="{{url("produtos/$produto->id")}}" class="js-del">
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
@stop
