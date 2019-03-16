<div class="form-group">
    <label>Nome</label>
    {!! Form::text('name', null, ['class'=>'form-control form-control-line', 'placeholder'=>'Nome do curso', 'required'=>'required']) !!}
</div>

<div class="form-group">
    <label>Nome</label>
    <textarea rows="4" class="form-control form-control-line" placeholder="Escreva uma descrição" name="description">@if(isset($course)){{$course->description}}@endif</textarea>
</div>

