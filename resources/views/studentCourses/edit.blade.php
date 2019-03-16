@extends('layouts.section_header')

@section('breadcrumb_page')
    Unidades
@endsection

@section('additional_css')

@endsection

@section('breadcrumb_items')
    <li class="breadcrumb-item">
        <a href="javascript:void(0)">
            Unidades
        </a>
    </li>
    <li class="breadcrumb-item active">
        Editar Unidades
    </li>
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    {!! Form::model($studentCourse,['url'=>route('studentCourses.update',$studentCourse->id),'method' => 'put','class'=>'']) !!}
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
@endsection