@extends('templates.template')

@section('content')

    <h1 class="text-center"> Tabela de Categorias</h1> <hr>

    <!-- BOTÃO INSERIR PARA REALIZAR CADASTRO -->
	<div class="text-md-center mt-3 m-4">
        <a href="{{ route('categorias.create') }}">
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
				<th scope="col">Descricao</th>
				<th scope="col">Action</th>
			</tr>
		</thead>

		<tbody>

			@foreach($categorias as $categoria)
				<tr>
                    <!-- ITENS JÁ CADASTRADOS DA TABELA -->
					<td scope="row">{{ $categoria->id }}</td>
					<td>{{ $categoria->nome }}</td>
					<td>{{ $categoria->descricao }}</td>
					<td>
                        <!-- BOTÕES DE AÇÃO -->
                        <a href="{{ route('categorias.show', [$categoria->id]) }}">
                            <button class="btn btn-dark">View</button>
                        </a>
                        <a href="{{ route('categorias.edit', [$categoria->id]) }}">
                            <button class="btn btn-primary">Edit</button>
                        </a>
                        <a href="{{url("categorias/$categoria->id")}}" class="js-del">
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
