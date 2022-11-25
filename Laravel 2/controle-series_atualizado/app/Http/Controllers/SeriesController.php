<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Serie;

class SeriesController
{
    public function index(Request $request)
    {
        $series = Serie::query()->orderBy('nome')->get();

        return view('series.index')->with('series', $series);
    }

    public function create()
    {
        return view('series.create');
    }   

    public function store(Request $request)
    {
        Serie::create($request->all()); //pega todos os dados vindos da requisição
        //Serie::create($request->only(['nome'])); pega somente os parâmetros passados
        //Serie::create($request->expect(['_token'])); pega todos os dados exceto o parâmetro

        return redirect()->route('series.index');
    }
}