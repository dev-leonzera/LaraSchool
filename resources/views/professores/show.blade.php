@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>{{$professor->p_nome . " " . $professor->u_nome}}</h3>
    </div>
    <div class="card-body">
        <p>Email: {{$professor->email}}</p>
        <p>Telefone: {{$professor->telefone}}</p>
        <p>Endereço: {{$professor->endereco}}</p>
        @if ($professor->ativo)
            <p>Ativo: Sim</p>
        @else
            <p>Ativo: Não</p>
        @endif
    </div>
</div>
@endsection
