<?php

namespace App\Http\Controllers;

use App\Pessoa;
use App\UserRole;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = Pessoa::paginate(3);
        return view('paginas.pessoa.index', compact('registros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paginas.pessoa.adicionar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|regex:/^[a-zA-Z]+$/u',
            'sobrenome' => 'required|regex:/^[a-zA-Z]+$/u',
            'identificacao' => 'required|min:11|max:11|regex:/^[0-9]+$/u'
        ]);

        $dados = $request->all();

        Pessoa::create($dados);

        return redirect()->route('reservas.pessoa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function show(Pessoa $pessoa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function edit(Pessoa $pessoa)
    {
        $registro = Pessoa::find($pessoa->id);
        return view('paginas.pessoa.editar', compact('registro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pessoa $pessoa)
    {
        $request->validate([
            'nome' => 'required|regex:/^[a-zA-Z]+$/u',
            'sobrenome' => 'required|regex:/^[a-zA-Z]+$/u',
            'identificacao' => 'required|min:11|max:11|regex:/^[0-9]+$/u'
        ]);
        
        $dados = $request->all();

        Pessoa::find($pessoa->id)->update($dados);

        return redirect()->route('reservas.pessoa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pessoa $pessoa)
    {
        Pessoa::find($pessoa->id)->delete();
        return redirect()->route('reservas.pessoa');
    }
}
