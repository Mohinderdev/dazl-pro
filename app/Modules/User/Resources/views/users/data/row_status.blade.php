@if($row->is_active == 1)
    <span class="kt-badge kt-badge--success kt-badge--inline"> Active </span>
@else
    <span class="kt-badge kt-badge--danger kt-badge--inline"> In-Active </span>
@endif
