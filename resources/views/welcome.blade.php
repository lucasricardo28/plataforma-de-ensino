@extends('layouts.section_header')

@section('breadcrumb_page')
    HOME
@endsection

@section('breadcrumb_items')
    <li class="breadcrumb-item">
        <a href="javascript:void(0)">
            home
        </a>
    </li>
    <li class="breadcrumb-item active">
        Dashboard
    </li>
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    Bem vindo!
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <div class="round round-lg align-self-center round-info"><i class="fas fa-user-graduate"></i></div>
                        <div class="m-l-10 align-self-center">
                            <h3 class="m-b-0 font-light">{{$countStudents}}</h3>
                            <h5 class="text-muted m-b-0">Quantidade de estudantes</h5></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <div class="round round-lg align-self-center round-primary"><i class="fas fa-book-open"></i></div>
                        <div class="m-l-10 align-self-center">
                            <h3 class="m-b-0 font-light">{{$countCourses}}</h3>
                            <h5 class="text-muted m-b-0">Quantidade de cursos</h5></div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

@section('additional_script')

@endsection
