@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Professores') }}</h1>
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
                        <a href="{{ route('professores.create') }}" class="btn btn-success btn-md mb-2">
                            <i class="fa fa-plus"></i>
                            Novo professor
                        </a>
                    </div>

                    <div class="card">
                        <div class="card-body p-0">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>Ativo?</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($professores as $professor)
                                    <tr>
                                        <td>{{ $professor->p_nome." ".$professor->u_nome }}</td>
                                        <td>{{ $professor->email }}</td>
                                        @if ($professor->ativo)
                                            <td>Sim</td>
                                        @else
                                            <td>Não</td>
                                        @endif
                                        <td>
                                            <a href="{{ url('/professores/' . $professor->id) }}" class="btn btn-primary btn-sm">
                                                <i class="fa fa-eye"></i>
                                                Ver
                                            </a>
                                            <a href="{{ url('/professores/' . $professor->id . '/edit') }}" class="btn btn-secondary btn-sm">
                                                <i class="fa fa-edit"></i>
                                                Editar
                                            </a>
                                            <form action="{{url('/professores/' . $professor->id)}}" method="post" style="display: inline">
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
                            {{ $professores->links() }}
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
