@extends('admin.layouts.app')
@section('page-title', 'Contact us')
@section('page-sub-title', 'Contact us')


@section('content')

<div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon">
                    <i class="kt-font-brand flaticon2-line-chart"></i>
                </span>
                <h3 class="kt-portlet__head-title">
                    Contact List
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

                                <th> Member Name </th>
                                <th> Property Address </th>
                                <th> Company Name </th>
                                <th> Contact Name </th>
                                <th> Issue description </th>
                                <th> Steps to resolve the issue </th>
                                <th> How issue resolved </th>
                                <th> Created at </th>
                                <th> Actions </th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($rows as $row)
                                    <tr>
                                        <td> {{ $row->id }} </td>

                                        <td> {{ $row->member_name }} </td>
                                        <td> {{ $row->property_address }} </td>
                                        <td> {{ $row->company_name }} </td>
                                        <td> {{ $row->contact_name }} </td>
                                        <td> {{ $row->issue_description }} </td>
                                        <td> {{ $row->steps_resolve_issue }} </td>
                                        <td> {{ $row->issue_solution }} </td>

                                        <td> {{ $row->created_at->diffForHumans() }} </td>
                                        <td>
                                            @include('contact-us::actions')
                                        </td>
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
