@extends('templates.template')

@section('content')

    <h1 class="text-center">Cadastrar Vendedor</h1> <hr>

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
        <form name="formCad" id="formCad" method="post" action="{{route('vendedors.store')}}">
            @csrf

            <!--SELEÇÃO DE USUÁRIO-->
            <select class="form-control" name="id_user" id="id_user">
                <option value=""> Usuários </option>
                @foreach($users as $findUsuario)
                    <option value="{{$findUsuario->id}}">{{$findUsuario->name}}</option>
                @endforeach
            </select><br>

            <!--PREENCHER CPF-->
            <input class="form-control" type="text" name="cpf" id="cpf" placeholder="cpf:"><br>

            <!--PREENCHER TELEFONE-->
            <input class="form-control" type="text" name="telefone" id="telefone" placeholder="telefone:"><br>

            <!--PREENCHER SALÁRIO-->
            <input class="form-control" type="text" name="salario" id="salario" placeholder="salario:"><br>


            <!--BOTÃO SUBMETER FORMULÁRIO-->
            <input class="btn btn-primary" type="submit" value="Cadastrar">

        </form>
    </div>

    <!-- BOTÃO DE RETORNO -->
    <div class="text-md-right mt-3 m-4 fixed-bottom">
        <a href="{{ route('dashboard') }}">
            <button class="btn btn-light">Voltar</button>
        </a></div>
@stop
