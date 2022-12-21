@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>{{$alunos->nome}}</h3>
    </div>
    <div class="card-body">
        <p>Nome do Pai: {{ $alunos->nome_pai }}</p>
        <p>Nome da Mãe: {{ $alunos->nome_mae }}</p>
        <p>Data de Nascimento: {{ date("d/m/Y", strtotime($alunos->data_nasc)) }}</p>
        <p>
            @php
            $mask = '(##)#####-####';

            $telefone = mask($mask, $alunos->telefone);
        @endphp
            Telefone: {{$telefone}}
        </p>
        <p>Endereço: {{$alunos->endereco}}</p>
        <p>Data de Matrícula: {{ date("d/m/Y", strtotime($alunos->data_matricula)) }}</p>
        <p>Série: {{ $turma->serie }}ª</p>
        <p>Turma: {{ $turma->nome }}</p>
    </div>
</div>
@endsection
