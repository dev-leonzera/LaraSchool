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
            <input type="number" name="nome" id="nome" class="form-control"><br>
            <label for="email">Ano Letivo</label><br>
            <input type="number" name="email" id="email" class="form-control"><br>
            <label for="email">Professor Responsável</label><br>
            <select name="id_professor" id="" class="form-control">
                @foreach ($professores as $professor)
                    {{-- <option value="{{ $professor->id }}">{{ $professor->$p_nome." ".$professor->$u_nome }}</option> --}}
                @endforeach
            </select><br>
            <label for="telefone">Nome</label><br>
            <input type="text" name="telefone" id="telefone" class="form-control"><br>
            <label for="endereco">Data de Início</label><br>
            <input type="date" name="endereco" id="endereco" class="form-control"><br>
            <label for="data_nasc">Data de Encerramento</label>
            <input type="date" name="data_nasc" id="data_nasc" class="form-control"><br>
            <label for="data_nasc">Turno</label>
            <select name="data_nasc" id="" class="form-control">
                <option value="m">Matutino</option>
                <option value="v">Vespertino</option>
                <option value="n">Noturno</option>
            </select>
            <input type="submit" value="Salvar" class="btn btn-success btn-md mt-3">
        </form>
    </div>
</div>
@endsection
