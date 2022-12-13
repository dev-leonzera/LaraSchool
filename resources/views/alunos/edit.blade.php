@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        Cadastrar Contato
    </div>
    <div class="card-body">
        <form action="{{url('/alunos/' . $alunos->id)}}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <label for="nome">Primeiro Nome</label><br>
            <input type="text" name="nome" id="nome" value="{{$alunos->p_nome}}" class="form-control"><br>
            <label for="nome">Último Nome</label><br>
            <input type="text" name="nome" id="nome" value="{{$alunos->p_nome}}" class="form-control"><br>
            <label for="email">Nome do Pai</label><br>
            <input type="text" name="email" id="email" value="{{$alunos->nome_pai}}" class="form-control"><br>
            <label for="email">Nome da Mãe</label><br>
            <input type="text" name="email" id="email" value="{{$alunos->nome_mae}}" class="form-control"><br>
            <label for="telefone">Telefone</label><br>
            <input type="text" name="telefone" id="telefone" value="{{$alunos->telefone}}" class="form-control"><br>
            <label for="endereco">Endereço</label><br>
            <input type="text" name="endereco" id="endereco" value="{{$alunos->endereco}}" class="form-control"><br>
            <label for="data_nasc">Data de Nascimento</label>
            <input type="date" name="data_nasc" id="data_nasc" value="{{ $alunos->data_nasc }}" class="form-control">
            <input type="submit" value="Salvar" class="btn btn-success btn-md">
        </form>
    </div>
</div>
@endsection
