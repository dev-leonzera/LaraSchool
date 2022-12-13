@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        Cadastrar Contato
    </div>
    <div class="card-body">
        <form action="{{url('/turmas/' . $turma->id)}}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <label for="serie">Série</label><br>
            <input type="number" name="serie" id="nome" value="{{ $turma->serie }}" class="form-control"><br>
            <label for="email">Ano Letivo</label><br>
            <input type="number" name="ano_letivo" id="email" value="{{ $turma->ano_letivo }}" class="form-control"><br>
            <label for="email">Professor Responsável</label><br>
            <select name="id_professor" id="" class="form-control">
                @foreach ($professores as $professor)
                    <option value="{{ $professor->id }}">{{ $professor->p_nome . " " . $professor->u_nome }}</option>
                @endforeach
            </select>
            <label for="telefone">Nome</label><br>
            <input type="text" name="nome" id="telefone" value="{{ $turma->nome }}" class="form-control"><br>
            <label for="endereco">Data de Início</label><br>
            <input type="date" name="data_inicio" value="{{ $turma->data_inicio }}" id="endereco" class="form-control"><br>
            <label for="data_nasc">Data de Encerramento</label>
            <input type="date" name="data_fim" value="{{ $turma->data_fim }}" id="data_nasc" class="form-control">
            <label for="turno">Turno</label>
            <select name="turno" id="" class="form-control">
                <option value="m">Matutino</option>
                <option value="v">Vespertino</option>
                <option value="n">Noturno</option>
            </select>
            <input type="submit" value="Salvar" class="btn btn-success btn-md mt-3">
        </form>
    </div>
</div>
@endsection
