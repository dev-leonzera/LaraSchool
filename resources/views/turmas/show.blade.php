@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h1>{{$turma->nome}}</h1>
    </div>
    <div class="card-body">
        <p>Série: {{$turma->serie}}ª</p>
        <p>Ano Letivo: {{ $turma->ano_letivo }}</p>
        <p>Professor Responsável: {{ $professor->p_nome." ".$professor->u_nome }}</p>
        <p>Turno: {{ $turma->turno }}</p>

        <div>
            <h2>Lista de Alunos</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nome</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($alunos as $aluno)
                        <tr>
                            <td>
                                <a href="{{ url('/alunos/' . $aluno->id) }}">
                                    {{ $aluno->nome }}
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
