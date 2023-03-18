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
    }

    public function create()
    {
        return view('gatos.create');
    }

    public function store(Request $request)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }

}

