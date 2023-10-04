@if($row->is_active == 1)
    <span class="kt-badge kt-badge--primary kt-badge--inline"> Normal </span>
@else
    <span class="kt-badge kt-badge--warning kt-badge--inline"> Social </span>
@endif
