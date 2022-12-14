@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Alunos') }}</h1>
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
                        <a href="{{ route('alunos.create') }}" class="btn btn-success btn-md mb-2">
                            <i class="fa fa-plus"></i>
                            Novo aluno
                        </a>
                    </div>

                    <div class="card">
                        <div class="card-body p-0">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Turma</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($alunos as $aluno)
                                    <tr>
                                        <td>{{ $aluno->nome }}</td>
                                        <td>{{ $aluno->turma->nome }}</td>
                                        <td>
                                            <a href="{{ url('/alunos/' . $aluno->id) }}" class="btn btn-primary btn-sm">
                                                <i class="fa fa-eye"></i>
                                                Ver
                                            </a>
                                            <a href="{{ url('/alunos/' . $aluno->id . '/edit') }}" class="btn btn-secondary btn-sm">
                                                <i class="fa fa-edit"></i>
                                                Editar
                                            </a>
                                            <form action="{{url('/alunos/' . $aluno->id)}}" method="post" style="display: inline">
                                                {{@method_field('DELETE')}}
                                                {!! csrf_field() !!}
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                    Apagar
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer clearfix">
                            {{ $alunos->links() }}
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
