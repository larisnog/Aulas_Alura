<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\SeriesFormRequest;
use App\Models\Series;
use App\Models\Season;
use App\Models\Episode;

class SeriesController
{
    public function index(Request $request)
    {
        $series = Series::all();
        $mensagemSucesso = session('mensagem.sucesso');

        return view('series.index')
            ->with('series', $series)->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create()
    {
        return view('series.create');
    }   

    public function store(SeriesFormRequest $request)
    {
        $coverPath = $request->file('cover')->store('series_cover', 'public');
        $request->coverPath = $coverPath;
        
        $serie = DB::transaction(function () use ($request){
            $serie = Series::create([
                'nome' => $request->nome,
                'cover' => $request->coverPath,
            ]);
            $seasons = [];
            for ($i = 1; $i <= $request->seasonsQty; $i++){
                $seasons[] = [
                    'series_id' => $serie->id,
                    'number' => $i
                ];
            }
            Season::insert($seasons);
    
            $episodes = [];
            foreach($serie->seasons as $season){
                for($j = 1; $j <= $request->episodesPerSeason; $j++){
                    $episodes[] = [
                        'season_id' => $season->id,
                        'number' => $j
                    ];
                }    
            }
            Episode::insert($episodes);

            return $serie;
        });
       
        return redirect()->route('series.index')
            ->with('mensagem.sucesso', "Série '{$serie->nome}' adicionada com sucesso");
    }

    public function destroy(Series $series)
    {
        $series->delete();

        return redirect()->route('series.index')
            ->with('mensagem.sucesso', "Série '{$series->nome}' removida com sucesso!");
    }

    public function edit(Series $series)
    {
        return view('series.edit')->with('serie', $series);
    }

    public function update(Series $series, SeriesFormRequest $request)
    {   
        $series->fill($request->all());
        $series->save();

        return redirect()->route('series.index')
            ->with('mensagem.sucesso', "Série '{$series->nome}' atualizada com sucesso");
    }
}