@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        Cadastrar Professor
    </div>
    <div class="card-body">
        <form action="{{url('professores')}}" method="post">
            {!! csrf_field() !!}
            <label for="nome">Primeiro Nome</label><br>
            <input type="text" name="p_nome" id="nome" class="form-control"><br>
            <label for="nome">Último Nome</label><br>
            <input type="text" name="u_nome" id="nome" class="form-control"><br>
            <label for="email">Email</label><br>
            <input type="text" name="email" id="email" class="form-control"><br>
            <label for="telefone">Telefone</label><br>
            <input type="text" name="telefone" id="telefone" class="form-control"><br>
            <label for="endereco">Endereço</label><br>
            <input type="text" name="endereco" id="endereco" class="form-control"><br>
            <label for="data_nasc">Data de Nascimento</label>
            <input type="date" name="data_nasc" id="data_nasc" class="form-control">
            <input type="submit" value="Salvar" class="btn btn-success btn-md mt-3">
        </form>
    </div>
</div>
@endsection
