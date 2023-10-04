<div class="form-group">
    {!! Form::label($name, $label ) !!}
      <select name="{{ $name }}" id="single" class="form-control">
        <option>{{$defaultVal}}</option>
        @foreach ($list as $key => $element)

                <option value="{{ $element->id }}"  @if (@$selected == $element->id) selected @endif >
                    {{ $element->$display_column }}
                </option>

        @endforeach
    </select>
    <small class="text-danger">{{ $errors->first($name) }}</small>
</div>


