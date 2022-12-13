@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Turmas') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="">
                        <a href="{{ route('turmas.create') }}" class="btn btn-success btn-md mb-2">
                            <i class="fa fa-plus"></i>
                            Nova turma
                        </a>
                    </div>

                    <div class="card">
                        <div class="card-body p-0">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Série</th>
                                        <th>Ano Letivo</th>
                                        <th>Professor</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($turmas as $turma)
                                    <tr>
                                        <td>{{ $turma->nome }}</td>
                                        <td>{{ $turma->serie }}ª</td>
                                        <td>{{ $turma->ano_letivo }}</td>
                                        <td>{{ $turma->professores->p_nome." ".$turma->professores->u_nome }}</td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-sm">
                                                <i class="fa fa-eye"></i>
                                                Ver
                                            </a>
                                            <a href="#" class="btn btn-secondary btn-sm">
                                                <i class="fa fa-edit"></i>
                                                Editar
                                            </a>
                                            <a href="#" class="btn btn-danger btn-sm">
                                                <i class="fa fa-eye"></i>
                                                Inativar
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer clearfix">
                            {{ $turmas->links() }}
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
