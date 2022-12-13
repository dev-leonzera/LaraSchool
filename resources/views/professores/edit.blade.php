@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        Atualizar Professor
    </div>
    <div class="card-body">
        <form action="{{url('/professores/' . $professores->id)}}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <label for="nome">Nome</label><br>
            <input type="text" name="nome" id="nome" value="{{$professores->nome}}" class="form-control"><br>
            <label for="email">Email</label><br>
            <input type="text" name="email" id="email" value="{{$professores->email}}" class="form-control"><br>
            <label for="telefone">Telefone</label><br>
            <input type="text" name="telefone" id="telefone" value="{{$professores->telefone}}" class="form-control"><br>
            <label for="endereco">Endereço</label><br>
            <input type="text" name="endereco" id="endereco" value="{{$professores->endereco}}" class="form-control"><br>
            <label for="data_nasc">Data de Nascimento</label>
            <input type="date" name="data_nasc" id="data_nasc" value="{{ $professores->data_nasc }}"class="form-control"><br>
            <input type="submit" value="Salvar" class="btn btn-success btn-md">
        </form>
    </div>
</div>
@endsection
