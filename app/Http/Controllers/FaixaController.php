<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Faixa;

class FaixaController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @param  int  $albumId
     * @return \Illuminate\Http\Response
     */
    public function create($albumId)
    {
        $album = Album::findOrFail($albumId);
        return view('faixas.create', compact('album'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $albumId
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $albumId)
    {
        $request->validate([
            'numero' => 'required',
            'nome' => 'required',
            'duracao' => 'required',
        ]);

        $album = Album::findOrFail($albumId);

        $faixa = new Faixa([
            'numero' => $request->input('numero'),
            'nome' => $request->input('nome'),
            'duracao' => $request->input('duracao'),
        ]);

        $album->faixas()->save($faixa);

        return redirect()
            ->route('albums.index')
            ->with('success', 'Faixa criada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $albumId
     * @param  int  $faixaId
     * @return \Illuminate\Http\Response
     */
    public function destroy($albumId, $faixaId)
    {
        $album = Album::findOrFail($albumId);
        $faixa = Faixa::findOrFail($faixaId);

        $faixa->delete();

        return redirect()
            ->route('albums.index')
            ->with('success', 'Faixa deletada com sucesso');
    }
}
