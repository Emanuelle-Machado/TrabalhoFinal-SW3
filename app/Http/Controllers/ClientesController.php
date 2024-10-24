<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Cliente;
use App\Http\Requests\ClienteRequest;
use App\Models\Endereco;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $clientes= Cliente::all();
        return view('clientes.index', ['clientes'=>$clientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        $enderecos=Endereco::all();
        return view('clientes.create', compact('enderecos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ClienteRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ClienteRequest $request)
    {
        $cliente = new Cliente;
        $cliente->nome = $request->input('nome');
		$cliente->cpf = $request->input('cpf');
		$cliente->telefone = $request->input('telefone');
        $cliente->id_endereco = $request->input('id_endereco');
        $cliente->save();

        return to_route('clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.show',['cliente'=>$cliente]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        $enderecos=Endereco::all();
        return view('clientes.edit',compact('cliente', 'enderecos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ClienteRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ClienteRequest $request, $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->nome = $request->input('nome');
		$cliente->cpf = $request->input('cpf');
		$cliente->telefone = $request->input('telefone');
        $cliente->id_endereco = $request->input('id_endereco');
        $cliente->save();

        return to_route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        return to_route('clientes.index');
    }
}
