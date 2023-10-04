<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
    {!! Form::label($label) !!}
    {!! Form::checkbox($name, '' ,  @$value->$name === 1?'checked' : '' , ['class' => '', 'rows' => 3]) !!}
    <small class="text-danger"> {{ $errors->first($name) }} </small>
</div>
