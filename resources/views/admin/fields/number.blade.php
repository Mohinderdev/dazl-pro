<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
    {!! Form::label( $label  ) !!}
    {!! Form::number($name, $value != null ? $value->$name : null, ['class' => 'form-control']) !!}
    <small class="text-danger"> {{ $errors->first($name) }} </small>
</div>
