@if($multiLang && count($languages) > 1)
    <div class="row">
        @foreach($languages as $lang)
            @php
                $newValue = null;
                if ($value != null){
                    $newValue = json_decode($value->$name, true)[$lang->code];
                }
            @endphp
            <div class="form-group col-md-6">
                {!! Form::label($name, __(@$path.'::lang.'.$label.'_'.$lang->code) ) !!}
                {!! Form::textarea($name.'['.$lang->code.']', $newValue, ['class' => 'form-control', 'id' => 'description_'.$lang->code]) !!}
                <small class="text-danger"> {{ $errors->first($name.'.'.$lang->code) }} </small>
            </div>
        @endforeach
    </div>
 @else
     <div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
        {!! Form::label($name, $label) !!}
        {!! Form::textarea($name, $value != null ? $value->$name : null, ['class' => 'form-control', 'id' => 'description']) !!}
        <small class="text-danger"> {{ $errors->first($name) }} </small>
    </div>
@endif
