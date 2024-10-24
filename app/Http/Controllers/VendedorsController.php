<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\Vendedor;
use App\Http\Requests\VendedorRequest;

class VendedorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $vendedors= Vendedor::all();
        return view('vendedors.index', ['vendedors'=>$vendedors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        $users=User::all();
        return view('vendedors.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  VendedorRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(VendedorRequest $request)
    {
        $vendedor = new Vendedor;
		$vendedor->id_user = $request->input('id_user');
		$vendedor->cpf = $request->input('cpf');
		$vendedor->telefone = $request->input('telefone');
		$vendedor->salario = $request->input('salario');
        $vendedor->save();

        return to_route('vendedors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $vendedor = Vendedor::findOrFail($id);
        return view('vendedors.show',compact('vendedor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $vendedor = Vendedor::findOrFail($id);
        $users = User::all();
        return view('vendedors.edit',compact('vendedor','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  VendedorRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(VendedorRequest $request, $id)
    {
        $vendedor = Vendedor::findOrFail($id);
		$vendedor->id_user = $request->input('id_user');
		$vendedor->cpf = $request->input('cpf');
		$vendedor->telefone = $request->input('telefone');
		$vendedor->salario = $request->input('salario');
        $vendedor->save();

        return to_route('vendedors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $vendedor = Vendedor::findOrFail($id);
        $vendedor->delete();

        return to_route('vendedors.index');
    }
}
