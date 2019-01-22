<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Atleta;

class ControladorAtleta extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('atleta');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novoatleta');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $atleta = new Atleta();
        $atleta->nome = $request->input('nome');
        $atleta->sexo = $request->input('sexo');
        $atleta->rg = $request->input('rg');
        $atleta->cpf = $request->input('cpf');
        $atleta->cnh = $request->input('cnh');
        $atleta->endereco = $request->input('endereco');
        $atleta->email = $request->input('email');
        $atleta->sangue = $request->input('sangue');
        $atleta->plano = $request->input('plano');
        $atleta->save();
        return redirect('/atletas');    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
