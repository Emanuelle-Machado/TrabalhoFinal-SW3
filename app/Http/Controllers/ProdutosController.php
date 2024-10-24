<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Categoria;
use App\Models\Produto;
use App\Http\Requests\ProdutoRequest;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $produtos= Produto::all();
        return view('produtos.index', ['produtos'=>$produtos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        $categorias=Categoria::all();
        return view('produtos.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ProdutoRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ProdutoRequest $request)
    {
        $produto = new Produto;
		$produto->nome = $request->input('nome');
		$produto->preco = $request->input('preco');
        $produto->id_categoria = $request->input('id_categoria');
        $produto->save();

        return to_route('produtos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.show',['produto'=>$produto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        $categorias = Categoria::all();
        return view('produtos.edit',compact('produto','categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ProdutoRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProdutoRequest $request, $id)
    {
        $produto = Produto::findOrFail($id);

		$produto->nome = $request->input('nome');
		$produto->preco = $request->input('preco');
        $produto->id_categoria = $request->input('id_categoria');
        $produto->save();

        return to_route('produtos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();

        return to_route('produtos.index');
    }
}
