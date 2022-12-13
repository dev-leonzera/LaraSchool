@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        Cadastrar Turma
    </div>
    <div class="card-body">
        <form action="{{url('turmas')}}" method="post">
            {!! csrf_field() !!}
            <label for="serie">Série</label><br>
            <input type="number" name="serie" id="serie" class="form-control"><br>
            <label for="ano_letivo">Ano Letivo</label><br>
            <input type="number" name="ano_letivo" id="ano_letivo" class="form-control"><br>
            <label for="professor">Professor Responsável</label><br>
            <select name="id_professor" id="professor" class="form-control">
                @foreach ($professores as $professor)
                    <option value="{{ $professor->id }}">{{ $professor->p_nome." ".$professor->u_nome }}</option>
                @endforeach
            </select><br>
            <label for="nome">Nome</label><br>
            <input type="text" name="nome" id="nome" class="form-control"><br>
            <label for="data_inicio">Data de Início</label><br>
            <input type="date" name="data_inicio" id="data_inicio" class="form-control"><br>
            <label for="data_fim">Data de Encerramento</label>
            <input type="date" name="data_fim" id="data_fim" class="form-control"><br>
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
