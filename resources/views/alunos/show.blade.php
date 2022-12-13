@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Contato #{{$alunos->id}}</h3>
    </div>
    <div class="card-body">
        <h5>Nome: {{$alunos->nome}}</h5>
        <p>Email: {{$alunos->email}}</p>
        <p>Telefone: {{$alunos->telefone}}</p>
        <p>Endereço: {{$alunos->endereco}}</p>
    </div>
</div>
@endsection
