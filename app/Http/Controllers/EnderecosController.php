<?php

namespace App\Http\Controllers;

//return type View
use Illuminate\View\View;
use App\Models\Endereco;
use App\Http\Requests\EnderecoRequest;
use Illuminate\Http\RedirectResponse;

class EnderecosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enderecos= Endereco::all();
        return view('enderecos.index', compact('enderecos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('enderecos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Response  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EnderecoRequest $request)
    {
        $cad=Endereco::create([

            'rua'=>$request->rua,
            'numero'=>$request->numero,
            'cep'=>$request->cep,
            'cidade'=>$request->cidade,
            'estado'=>$request->estado

        ]);
        if($cad){
            return to_route('enderecos.index');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Response  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $endereco = Endereco::findOrFail($id);
        return view('enderecos.show', compact('endereco'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $endereco = Endereco::findOrFail($id);
        return view('enderecos.edit', compact('endereco'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EnderecoRequest $request, $id)
    {
        Endereco::where(['id'=>$id])->update([
            'rua'=>$request->rua,
            'numero'=>$request->numero,
            'cep'=>$request->cep,
            'cidade'=>$request->cidade,
            'estado'=>$request->estado
        ]);
        return to_route('enderecos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $endereco = Endereco::destroy($id);
        return ($endereco)? "sim":"não";
        return to_route('enderecos.index');
    }
}
