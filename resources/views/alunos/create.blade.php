@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        Cadastrar Aluno
    </div>
    <div class="card-body">
        <form action="{{url('alunos')}}" method="post">
            {!! csrf_field() !!}
            <label for="nome">Nome</label><br>
            <input type="text" name="nome" id="nome" class="form-control"><br>
            <label for="email">Primeiro Nome</label><br>
            <input type="text" name="email" id="email" class="form-control"><br>
            <label for="email">Último Nome</label><br>
            <input type="text" name="nome" id="nome" class="form-control"><br>
            <label for="email">Nome do Pai</label><br>
            <input type="text" name="email" id="email" class="form-control"><br>
            <label for="email">Nome da Mãe</label><br>
            <input type="text" name="email" id="email" class="form-control"><br>
            <label for="data_nasc">Data de Nascimento</label>
            <input type="date" name="data_nasc" id="data_nasc" class="form-control">
            <label for="telefone">Telefone</label><br>
            <input type="text" name="telefone" id="telefone" value="{{$alunos->telefone}}" class="form-control"><br>
            <label for="endereco">Endereço</label><br>
            <input type="text" name="endereco" id="endereco" value="{{$alunos->endereco}}" class="form-control"><br>
            <label for="data_nasc">Turma</label>
            <select name="id_professor" id="" class="form-control">
                @foreach ($turmas as $turma)
                    <option value="{{ $turma->id }}">{{ $turma->$nome }}</option>
                @endforeach
            </select>
            <input type="submit" value="Salvar" class="btn btn-success btn-md mt-3">
        </form>
    </div>
</div>
@endsection
