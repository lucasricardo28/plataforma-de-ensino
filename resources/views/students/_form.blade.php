<div class="form-group">
    <label>Nome</label>
    {!! Form::text('name', null, ['class'=>'form-control form-control-line', 'placeholder'=>'Nome da unidade', 'required'=>'required']) !!}
</div>

<div class="form-group">
    <label>Status</label>
    {!! Form::email('email', null, ['class'=>'form-control form-control-line', 'placeholder'=>'Email', 'required'=>'required']) !!}
</div>

<div class="form-group">
    <label>Data de nascimento</label>
    {!! Form::date('date_born', null, ['class'=>'form-control form-control-line', 'placeholder'=>'Data de nascimento']) !!}
</div>

<div class="form-group">
    <h5 class="box-title">Cursos</h5>
    <select id='pre-selected-options' multiple='multiple' name="courses[]">
        @foreach($courses as $course)
            <option value='{{$course->id}}'
            @if(isset($student))
                @foreach($student->courses as $item)
                    {{$item->id == $course->id ? "selected": ""}}
                @endforeach
            @endif
            >
                {{$course->name}}
            </option>
        @endforeach
    </select>
</div>