<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professores = Professor::paginate(5);
        return view('professores.index')->with('professores', $professores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('professores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $professor = new Professor();
        $professor->p_nome = $request->input('p_nome');
        $professor->u_nome = $request->input('u_nome');
        $professor->data_nasc = $request->input('data_nasc');
        $professor->data_entrada = now()->toDateString();
        $professor->telefone = $request->input('telefone');
        $professor->endereco = $request->input('endereco');
        $professor->email = $request->input('email');
        $professor->save();
        return redirect('professores')->with('flash_message', 'Professor Cadastrado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $professor = Professor::find($id);
        return view('professores.show')->with('professor', $professor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $professor = Professor::find($id);
        return view('professores.edit')->with('professor', $professor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $professor = Professor::find($id);
        $professor->p_nome = $request->input('p_nome');
        $professor->u_nome = $request->input('u_nome');
        $professor->data_nasc = $request->input('data_nasc');
        $professor->telefone = $request->input('telefone');
        $professor->endereco = $request->input('endereco');
        $professor->email = $request->input('email');
        $professor->ativo = intval($request->input('ativo'));
        $professor->update();
        return redirect('professores')->with('flash_message', 'Professor atualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Professor::destroy($id);
        return redirect('professores')->with('flash_message', 'Professor removido');
    }
}
