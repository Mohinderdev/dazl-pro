<span>
    {!! Form::open(['method' => 'DELETE', 'class' => 'form-horizontal']) !!}
        {!! Form::hidden('id', $row->id) !!}

        <a title="Edit" href="" class="btn btn-sm btn-clean btn-icon btn-icon-md">
            <i class="flaticon-eye actions-icon"></i>
        </a>

{{--        <button class="btn btn-sm btn-clean btn-icon btn-icon-md" type="submit" onclick="return confirm('Confirm Delete operation ?');">--}}
{{--            <i class="flaticon-delete-1 actions-icon"></i>--}}
{{--        </button>--}}

    {!! Form::close() !!}
</span>
