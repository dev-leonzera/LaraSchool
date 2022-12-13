@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Aluno #{{$alunos->id}}</h3>
    </div>
    <div class="card-body">
        <h5>Nome: {{$alunos->nome}}</h5>
        <p>Nome do Pai: {{ $alunos->nome_pai }}</p>
        <p>Nome da Mãe: {{ $alunos->nome_mae }}</p>
        <p>Data de Nascimento: {{ $alunos->data_nasc->format('d/m/Y') }}</p>
        <p>Telefone: {{$alunos->telefone}}</p>
        <p>Endereço: {{$alunos->endereco}}</p>
        <p>Data de Matrícula: {{ $alunos->data_matricula->format('d/m/Y') }}</p>
        <p>Série: {{ $turma->serie }}ª</p>
        <p>Turma: {{ $turma->nome }}</p>
    </div>
</div>
@endsection
