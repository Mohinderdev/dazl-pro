<span>

    <a title="Edit" href="{{ route('users.show', $row->id) }}"
       class="btn btn-sm btn-clean btn-icon btn-icon-md">
        <i class="flaticon-eye actions-icon"></i>
    </a>

    @if($row->is_active == 1)
        <a title="De-activate" href="{{ route('users.update-status', $row->id) }}"
           class="btn btn-sm btn-clean btn-icon btn-icon-md">
            <i class="flaticon2-cancel-music actions-icon danger-action"></i>
        </a>
    @else
        <a title="activate" href="{{ route('users.update-status', $row->id) }}"
           class="btn btn-sm btn-clean btn-icon btn-icon-md">
            <i class="flaticon2-check-mark actions-icon success-action"></i>
        </a>
    @endif

</span>
