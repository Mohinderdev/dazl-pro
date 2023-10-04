@extends('admin.layouts.app')
@section('page-title', 'payments')
@section('page-sub-title', 'payments list')
@section('page-actions')
    <div class="kt-subheader__toolbar">
{{--        <div class="kt-subheader__wrapper">--}}
{{--            <a href="{{ route('payments.create') }}" class="btn btn-primary">--}}
{{--                Add new &nbsp;--}}
{{--                <i class="flaticon2-plus"></i>--}}
{{--            </a>--}}
{{--        </div>--}}
    </div>
@endsection

@section('content')

<div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon">
                    <i class="kt-font-brand flaticon2-line-chart"></i>
                </span>
                <h3 class="kt-portlet__head-title">
                    Basic
                </h3>
            </div>
        </div>
        <div class="kt-portlet__body">

            <!--begin: Datatable -->
            <div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-striped- table-bordered table-hover table-checkable" id="myTable">
                            <thead>
                            <tr>
                                <th> Id </th>
                                <th> User Name </th>
                                <th> Payment Status </th>
                                <th> Total </th>
                                <th> Created at </th>
{{--                                <th> Actions </th>--}}
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($rows as $row)
                                    <tr>
                                        <td> {{ $row->id }} </td>
                                        <td> {{ $row->userable->first_name }} {{$row->userable->last_name}} </td>
                                        <td> {{ $row->payment_status }} </td>
                                        <td> {{ $row->total }} </td>
                                        <td> {{ $row->created_at }} </td>
{{--                                        <td>--}}
{{--                                            @include('payments::actions')--}}
{{--                                        </td>--}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@push('scripts')
<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
@endpush
