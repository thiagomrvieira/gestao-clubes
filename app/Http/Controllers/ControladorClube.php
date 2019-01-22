<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clube;

class ControladorClube extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clubes = Clube::all();
        return view('clubes', compact('clubes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novoclube');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clube = new Clube();
        $clube->nome = $request->input('nomeClube');
        $clube->cnpj = $request->input('cnpj');
        $clube->razao = $request->input('razao');
        $clube->fundacao = $request->input('fundacao');
        $clube->presidente = $request->input('presidente');
        $clube->email = $request->input('email');
        $clube->contato = $request->input('contato');
        $clube->save();
        return redirect('/clubes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clube = Clube::find($id);
        if(isset($clube)){
            return view('editarclube', compact('clube'));
        }
        return redirect('/clubes');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $clube = Clube::find($id);
        if(isset($clube)){
            $clube->nome = $request->input('nomeClube');
            $clube->save();
            return redirect('/clubes');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clube = Clube::find($id);
        if(isset($clube)){
            $clube->delete();
        }
        return redirect('/clubes');

    }
}
