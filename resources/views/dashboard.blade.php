<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!--MENSAGEM DE AVISO DE LOGIN EFETUADO COM SUCESSO-->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <!--BOTÕES PARA ACESSAR CRUDS-->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <!--BOTÃO PARA O CRUD ENDEREÇOS-->
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{url("enderecos.index")}}">
                        <button class="btn btn-dark">Endereço</button>
                        <a/>
                </div>

                <!--BOTÃO PARA O CRUD CLIENTES-->
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{url("clientes.index")}}">
                        <button class="btn btn-dark">Cliente</button>
                        <a/>
                </div>

                <!--BOTÃO PARA O CRUD CATEGORIAS-->
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{url("categorias.index")}}">
                        <button class="btn btn-dark">Categoria</button>
                        <a/>
                </div>

                <!--BOTÃO PARA O CRUD PRODUTOS-->
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{url("produtos.index")}}">
                        <button class="btn btn-dark">Produto</button>
                        <a/>
                </div>

                <!--BOTÃO PARA O CRUD VENDEDORES-->
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{url("vendedors.index")}}">
                        <button class="btn btn-dark">Vendedor</button>
                        <a/>
                </div>

                <!--BOTÃO PARA O CRUD DE REGISTRO DE VENDAS-->
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{url("vendas.index")}}">
                        <button class="btn btn-dark">Registrar Venda</button>
                        <a/>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
