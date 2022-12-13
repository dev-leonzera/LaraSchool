<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use App\Models\Turma;
use Illuminate\Http\Request;

class TurmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turmas = Turma::with('professores')->paginate(5);
        return view('turmas.index')->with('turmas', $turmas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $professores = Professor::all();
        return view('turmas.create')->with('professores', $professores);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $turma = new Turma();
        $turma->id_professor = $request->input('id_professor');
        $turma->serie = $request->input('serie');
        $turma->ano_letivo = $request->input('ano_letivo');
        $turma->nome = $request->input('nome');
        $turma->data_inicio = $request->input('data_inicio');
        $turma->data_fim = $request->input('data_fim');
        $turma->turno = $request->input('turno');
        $turma->save();
        return redirect('turmas')->with('flash_message', 'Turma cadastrada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $turma = Turma::find($id);
        switch ($turma->turno){
            case 'm':
                $turma->turno = 'Matutino';
                break;
            case 'v':
                $turma->turno = 'Vespertino';
                break;
        }
        $professor = Professor::find($turma->id_professor);
        return view('turmas.show')->with('turma', $turma)->with('professor', $professor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $turma = Turma::find($id);
        $professores = Professor::all();
        return view('turmas.edit')->with('turma', $turma)->with('professores', $professores);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $turma = Turma::find($id);
        $dados = $request->all();
        $turma->update($dados);
        return redirect('turmas')->with('flash_message', 'Turma atualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Turma::destroy($id);
        return redirect('turmas')->with('Turma removida');
    }
}
