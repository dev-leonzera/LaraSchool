@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        Atualizar Professor
    </div>
    <div class="card-body">
        <form action="{{url('/professores/' . $professor->id)}}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <label for="nome">Primeiro Nome</label><br>
            <input type="text" name="p_nome" id="nome" value="{{$professor->p_nome}}" class="form-control"><br>
            <label for="nome">Último Nome</label><br>
            <input type="text" name="u_nome" id="nome" value="{{$professor->u_nome}}" class="form-control"><br>
            <label for="email">Email</label><br>
            <input type="text" name="email" id="email" value="{{$professor->email}}" class="form-control"><br>
            <label for="telefone">Telefone</label><br>
            <input type="text" name="telefone" id="telefone" value="{{$professor->telefone}}" class="form-control"><br>
            <label for="endereco">Endereço</label><br>
            <input type="text" name="endereco" id="endereco" value="{{$professor->endereco}}" class="form-control"><br>
            <label for="data_nasc">Data de Nascimento</label>
            <input type="date" name="data_nasc" id="data_nasc" value="{{ $professor->data_nasc }}"class="form-control"><br>
            <label for="ativo">Ativo?</label>
            <select name="ativo" id="" class="form-control">
                <option value=1>Sim</option>
                <option value=0>Não</option>
            </select>
            <input type="submit" value="Salvar" class="btn btn-success btn-md">
        </form>
    </div>
</div>
@endsection
