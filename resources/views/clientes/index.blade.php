@extends('templates.template')

@section('content')

    <h1 class="text-center"> Tabela de Clientes</h1> <hr>

    <!-- BOTÃO INSERIR PARA REALIZAR CADASTRO -->
	<div class="text-md-center mt-3 m-4">
        <a href="{{ route('clientes.create') }}">
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
				<th scope="col">CPF</th>
				<th scope="col">Telefone</th>
                <th scope="col">ID_Endereco</th>
				<th scope="col">Action</th>
			</tr>
		</thead>

		<tbody>

			@foreach($clientes as $cliente)
				<tr>
                    <!-- ITENS JÁ CADASTRADOS DA TABELA -->
					<td scope="row">{{ $cliente->id }}</td>
                    <td>{{ $cliente->nome }}</td>
					<td>{{ $cliente->cpf }}</td>
					<td>{{ $cliente->telefone }}</td>
                    <td>{{ $cliente->id_endereco }}</td>
					<td>
                        <!-- BOTÕES DE AÇÃO -->
                        <a href="{{ route('clientes.show', [$cliente->id]) }}">
                            <button class="btn btn-dark">View</button></a>
                        <a href="{{ route('clientes.edit', [$cliente->id]) }}">
                            <button class="btn btn-primary">Edit</button></a>
                        <a href="{{url("clientes/$cliente->id")}}" class="js-del">
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
