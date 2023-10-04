<div class="form-group">
    {!! Form::label($name,  $label ) !!}

    <select class="multi-select form-control {{$name}}" multiple="multiple" name="{{$name}}[]">
        @foreach($list as $element)
            <option value="{{$element->id}}">{{$element->name}}</option>
        @endforeach
    </select>
    <small class="text-danger">{{ $errors->first($name) }}</small>
</div>
<script>
    let selections = @if($selected) {{@$selected->pluck('id')}} @endif;
</script>
@push('scripts')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".multi-select").select2({
                multiple:true,
                allowClear: true
            });
            $(".multi-select").val(selections).trigger('change');
        });

    </script>
@endpush
