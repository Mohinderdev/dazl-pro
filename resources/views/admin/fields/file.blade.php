
    <div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
        {!! Form::label($name, $label  ) !!}
        {!! Form::file($name, ['class' => 'form-control' , 'multiple' => $multi_upload]) !!}
    <small class="text-danger"> {{ $errors->first($name) }} </small>
</div>

