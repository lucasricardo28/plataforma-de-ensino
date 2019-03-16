@extends('layouts.section_header')

@section('breadcrumb_page')
    Estudante por curso
@endsection

@section('additional_css')
    <link href="{{asset('plugins/multiselect/css/multi-select.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumb_items')
    <li class="breadcrumb-item">
        <a href="javascript:void(0)">
            Estudante por curso
        </a>
    </li>
    <li class="breadcrumb-item active">
        Criar Estudante por curso
    </li>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    {!! Form::open(['url'=>route('studentCourses.store'),'class'=>'']) !!}
                    @include('studentCourses._form')
                    <button type="submit" class="btn waves-effect waves-light btn-rounded btn-info float-right text-white">Salvar</button>
                    {!! Form::close() !!}
                    <a href="{{route('studentCourses.index')}}"><button class="btn waves-effect waves-light btn-rounded btn-secondary float-left">Voltar</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('additional_script')
    <script type="text/javascript" src="{{asset('plugins/multiselect/js/jquery.multi-select.js')}}"></script>
    <script>
        $(function () {
            "use strict";
            $('#pre-selected-options').multiSelect();
            $('#optgroup').multiSelect({
                selectableOptgroup: true
            });

            $(".ms-container").css('width','100%');
        })
    </script>
@endsection