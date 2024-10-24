<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Produto;
use App\Models\Venda;
use App\Models\Vendedor;
use Illuminate\Http\Request;

class VendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vendas = Venda::all();
        return view('vendas.index', ['vendas'=>$vendas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes=Cliente::all();
        $produtos=Produto::all();
        $vendedors=Vendedor::all();
        return view('vendas.create',
            compact('clientes','produtos','vendedors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $venda = new Venda();
        $venda->id_cliente = $request->input('id_cliente');
        $venda->id_produto = $request->input('id_produto');
        $venda->id_vendedor = $request->input('id_vendedor');
        $venda->save();

        return to_route('vendas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $venda = Venda::findOrFail($id);
        return view('vendas.show',['venda'=>$venda]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $venda = Venda::findOrFail($id);
        $clientes=Cliente::all();
        $produtos=Produto::all();
        $vendedors=Vendedor::all();
        return view('vendas.edit',compact('venda','clientes','produtos','vendedors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $venda = Venda::findOrFail($id);
        $venda->id_cliente = $request->input('id_cliente');
        $venda->id_produto = $request->input('id_produto');
        $venda->id_vendedor = $request->input('id_vendedor');
        $venda->save();

        return to_route('vendas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $venda = Venda::findOrFail($id);
        $venda->delete();

        return to_route('vendas.index');
    }
}
