@extends('templates.template')

@section('content')

    <h1 class="text-center"> Tabela de Endereços</h1> <hr>

    <!-- BOTÃO INSERIR PARA REALIZAR CADASTRO -->
	<div class="text-md-center mt-3 m-4">
        <a href="{{ route('enderecos.create') }}">
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
				<th scope="col">Rua</th>
				<th scope="col">Número</th>
				<th scope="col">CEP</th>
				<th scope="col">Cidade</th>
				<th scope="col">Estado</th>
				<th scope="col">Action</th>
			</tr>
		    </thead>

		<tbody>

        @foreach($enderecos as $endereco)
            <tr>
                <!-- ITENS JÁ CADASTRADOS DA TABELA -->
                <th scope="row">{{$endereco->id}}</th>
                <td>{{ $endereco->rua }}</td>
                <td>{{ $endereco->numero }}</td>
                <td>{{ $endereco->cep }}</td>
                <td>{{ $endereco->cidade }}</td>
                <td>{{ $endereco->estado }}</td>
                <td>
                    <!-- BOTÕES DE AÇÃO -->
                    <a href="{{ route('enderecos.show', [$endereco->id]) }}">
                        <button class="btn btn-dark">View</button>
                    </a>
                    <a href="{{ route('enderecos.edit', [$endereco->id]) }}">
                        <button class="btn btn-primary">Edit</button>
                    </a>
                    <a href="{{url("enderecos/$endereco->id")}}" class="js-del">
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
