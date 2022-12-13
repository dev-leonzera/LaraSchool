@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Professor #{{$professor->id}}</h3>
    </div>
    <div class="card-body">
        <h5>Nome: {{$professor->nome}}</h5>
        <p>Email: {{$professor->email}}</p>
        <p>Telefone: {{$professor->telefone}}</p>
        <p>Endereço: {{$professor->endereco}}</p>
        @if ($professor->ativo)
            <p>Sim</p>
        @else
            <p>Não</p>
        @endif
    </div>
</div>
@endsection
