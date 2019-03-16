@extends('layouts.section_header')

@section('breadcrumb_page')
    Cursos
@endsection

@section('additional_css')

@endsection

@section('breadcrumb_items')
    <li class="breadcrumb-item">
        <a href="javascript:void(0)">
            Cursos
        </a>
    </li>
    <li class="breadcrumb-item active">
        Editar Cursos
    </li>
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    {!! Form::model($course,['url'=>route('courses.update',$course->id),'method' => 'put','class'=>'']) !!}
                    @include('courses._form')
                    <button type="submit" class="btn waves-effect waves-light btn-rounded btn-info float-right text-white">Salvar</button>
                    {!! Form::close() !!}
                    <a href="{{route('courses.index')}}"><button class="btn waves-effect waves-light btn-rounded btn-secondary float-left">Voltar</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('additional_script')
@endsection