<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Categoria;
use App\Http\Requests\CategoriaRequest;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $categorias= Categoria::all();
        return view('categorias.index', ['categorias'=>$categorias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CategoriaRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CategoriaRequest $request)
    {
        $categoria = new Categoria;
        $categoria->nome = $request->input('nome');
        $categoria->descricao = $request->input('descricao');
        $categoria->save();

        return to_route('categorias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $categoria = Categoria::findOrFail($id);
        return view('categorias.show',['categoria'=>$categoria]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $categoria = Categoria::findOrFail($id);
        return view('categorias.edit',['categoria'=>$categoria]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CategoriaRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CategoriaRequest $request, $id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->nome = $request->input('nome');
        $categoria->descricao = $request->input('descricao');
        $categoria->save();

        return to_route('categorias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();

        return to_route('categorias.index');
    }
}
