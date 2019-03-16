@extends('layouts.section_header')

@section('additional_css')
    <link href="{{asset('plugins/datatables/media/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
@endsection

@section('breadcrumb_page')
    Estudante
@endsection

@section('breadcrumb_items')
    <li class="breadcrumb-item">
        <a href="javascript:void(0)">
            Estudante
        </a>
    </li>
    <li class="breadcrumb-item active">
        Lista de Estudante
    </li>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <h4 class="card-title">Estudante</h4>
                        </div>
                        <div class="col-6">
                            <a href="{!! route('students.create') !!}">
                                <button type="button" class="btn waves-effect waves-light btn-rounded btn-info float-right text-white">
                                    Adicionar Estudante
                                </button>
                            </a>
                        </div>
                    </div>

                    <div class="mt-2">
                        <table class="display nowrap table table-hover table-striped table-bordered dataTable" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($students as $student)
                                <tr>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>
                                        <div class="row">
                                            <a href="{{route('students.edit', $student)}}" class="ml-3">
                                                <button class="btn btn-info waves-effect waves-light" type="button" data-toggle="tooltip" data-original-title="Editar item">
                                                    <i class="fa fa-edit text-white"></i>
                                                </button>
                                            </a>
                                            {!! @Form::open(['url'=>route('students.destroy', $student),'class'=>'ml-3 form-remove', 'method'=>'DELETE']) !!}
                                            <button class="btn btn-danger waves-effect waves-light remove-item" type="button" data-toggle="tooltip" data-original-title="Remover item">
                                                <i class="fa fa-trash"></i>
                                            </button>

                                            <button type="submit" class="d-none">Apagar</button>
                                            {!! @Form::close() !!}
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">Nenhum item foi encontrado</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('additional_script')
    <script>
        $(document).ready(function() {

        } );
    </script>
@endsection