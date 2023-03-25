<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\celular;

class CelularesController extends Controller
{
    public function index()
    {
        $celulares = Celular::all();

        return view('celulares.index', compact('celulares'));

        $celulares = celular::all();
        return view('celulares.index', compact('celulares'));

    }

    public function create(Request $requisicao)
    {
        return view('celulares.create');

        $celular = new celular();

        $celular->nome = $requisicao->nome;
        $celular->cor = $requisicao->cor;
        $celular->modelo = $requisicao->modelo;
        $celular->ano = $requisicao->ano;

        $celular->save();

        return redirect()->route('celulares.show', $celular->id);

    }

    public function store(Request $request)
    {
        $celular= new celular();

    $celular->nome = $request->nome;
    $celular->modelo = $request->raca;
    $celular->ano = $request->idade;
    $celular->save();

    return redirect()->route('celular.index');
    }

    public function show(celular $celular)
    {
        // Retorna a view gatos.view com o objeto $gato
        return view('celulares.view', compact('celular'));
    }

    public function edit($id)
    {
        return view('celulares.edit', compact('celular'));
    }

    public function update(Request $requisicao, celular $celular)
    {
        // Atualiza o objeto com os dados da requisição
        $celular->update($requisicao->all());

        // Redireciona para a página de detalhes do gato
        return redirect()->route('celulares.show', $celular->id);
    }

    public function destroy(celular $celular)
{
    $celular->delete();

    return redirect()->route('celular.index');
}

}

