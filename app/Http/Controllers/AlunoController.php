<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Turma;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::with('turma')->paginate(5);
        return view('alunos.index')->with('alunos', $alunos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $turmas = Turma::all();
        return view('alunos.create')->with('turmas', $turmas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aluno = new Aluno();
        $aluno->id_turma = $request->input('id_turma');
        $aluno->nome = $request->input('nome');
        $aluno->nome_pai = $request->input('nome_pai');
        $aluno->nome_mae = $request->input('nome_mae');
        $aluno->telefone = $request->input('telefone');
        $aluno->endereco = $request->input('endereco');
        $aluno->data_nasc = $request->input('data_nasc');
        $aluno->data_matricula = now()->toDateString();
        $aluno->status_matricula = 'ativo';
        $aluno->save();
        return redirect('alunos')->with('flash_message', 'Aluno cadastrado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aluno = Aluno::find($id);
        $turma = Turma::find($aluno->id_turma);
        return view('alunos.show')->with('alunos', $aluno)->with('turma', $turma);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aluno = Aluno::find($id);
        $turmas = Turma::all();
        return view('alunos.update')->with('alunos', $aluno)->with('turmas', $turmas);
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
        $aluno = Aluno::find($id);
        $dados = $request->all();
        $aluno->update($dados);
        return redirect('aluno')->with('flash_message', 'Aluno atualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Aluno::destroy($id);
        return redirect('aluno')->with('flash_message', 'Aluno removido');
    }
}
