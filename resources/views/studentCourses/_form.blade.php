<div class="form-group">
    <label>Estudantes</label>
    {!! Form::select('study_id', $students, null,['class'=>'form-control form-control-line','required'=>'required']) !!}
</div>
<div class="form-group">
    <h5 class="box-title">Cursos</h5>
    <select id='pre-selected-options' multiple='multiple' name="courses[]">
        @foreach($courses as $course)
            <option value='{{$course->id}}'>
                {{$course->name}}
            </option>
        @endforeach
    </select>
</div>
