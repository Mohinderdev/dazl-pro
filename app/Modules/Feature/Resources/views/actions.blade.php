<span>
    {!! Form::open(['method' => 'DELETE', 'route' => ["features.destroy", $row->id], 'class' => 'form-horizontal']) !!}
        {!! Form::hidden('id', $row->id) !!}

        <a title="Edit" href="{{ route('features.edit', $row->id) }}" class="btn btn-sm btn-clean btn-icon btn-icon-md">
            <i class="flaticon2-note actions-icon"></i>
        </a>
        <?php if ($row->name != 'None'){?>
        <button class="btn btn-sm btn-clean btn-icon btn-icon-md {$row->name}" type="submit" onclick="return confirm('Confirm Delete operation ?');">
            <i class="flaticon-delete-1 actions-icon"></i>
        </button>
        <?php }?>

        <!-- <button class="btn btn-sm btn-clean btn-icon btn-icon-md" type="submit" onclick="return confirm('Confirm Delete operation ?');">
            <i class="flaticon-delete-1 actions-icon"></i>
        </button> -->
    {!! Form::close() !!}
</span>
