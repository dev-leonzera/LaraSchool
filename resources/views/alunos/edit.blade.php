@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        Atualizar Aluno
    </div>
    <div class="card-body">
        <form action="{{url('/alunos/' . $aluno->id)}}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <label for="nome">Nome</label><br>
            <input type="text" name="nome" id="nome" value="{{$aluno->nome}}" class="form-control"><br>
            <label for="email">Nome do Pai</label><br>
            <input type="text" name="nome_pai" id="email" value="{{$aluno->nome_pai}}" class="form-control"><br>
            <label for="email">Nome da Mãe</label><br>
            <input type="text" name="nome_mae" id="email" value="{{$aluno->nome_mae}}" class="form-control"><br>
            <label for="telefone">Telefone</label><br>
            <input type="text" name="telefone" id="telefone" value="{{$aluno->telefone}}" class="form-control"><br>
            <label for="endereco">Endereço</label><br>
            <input type="text" name="endereco" id="endereco" value="{{$aluno->endereco}}" class="form-control"><br>
            <label for="data_nasc">Data de Nascimento</label>
            <input type="date" name="data_nasc" id="data_nasc" value="{{ $aluno->data_nasc }}"class="form-control"><br>
            <label for="turma">Turma</label>
            <select name="id_turma" id="" class="form-control">
                @foreach ($turmas as $turma)
                    <option value="{{ $turma->id }}">{{ $turma->nome }}</option>
                @endforeach
            </select><br>
            <label for="status_matricula">Status da Matrícula</label>
            <select name="status_matricula" id="status_matricula" class="form-control">
                <option value="ativo">Ativo</option>
                <option value="inativo">Inativo</option>
            </select>
            <input type="submit" value="Salvar" class="btn btn-success btn-md mt-3">
        </form>
    </div>
</div>
@endsection
