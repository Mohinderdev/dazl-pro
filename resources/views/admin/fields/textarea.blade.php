<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
    {!! Form::label($label) !!}
    {!! Form::textarea($name, $value != null ? $value->$name : null, ['class' => 'form-control', 'rows' => 3]) !!}
    <small class="text-danger"> {{ $errors->first($name) }} </small>
</div>
