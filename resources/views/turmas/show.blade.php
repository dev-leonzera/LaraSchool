@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Turma #{{$turma->id}}</h3>
    </div>
    <div class="card-body">
        <h5>Nome: {{$turma->nome}}</h5>
        <p>Série: {{$turma->serie}}ª</p>
        <p>Ano Letivo: {{ $turma->ano_letivo }}</p>
        <p>Professor Responsável: {{ $professor->p_nome." ".$professor->u_nome }}</p>
        <p>Turno: {{ $turma->turno }}</p>
    </div>
</div>
@endsection
