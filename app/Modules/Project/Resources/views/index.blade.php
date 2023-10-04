@extends('admin.layouts.app')
@section('page-title', 'projects')
@section('page-sub-title', 'projects list')
@section('page-actions')
    <div class="kt-subheader__toolbar">
        <div class="kt-subheader__wrapper">
            <a href="{{ route('projects.create') }}" class="btn btn-primary">
                Add new &nbsp;
                <i class="flaticon2-plus"></i>
            </a>
        </div>
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
                                <th> Name </th>
                                <th> Description </th>
                                <th> Start Date </th>
                                <th> customer </th>
                                <th> Room </th>
                                <th> Features </th>
                                <th> Created at </th>
                                <th> Updated at </th>
                                <th> Actions </th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($rows as $row)
                                    <tr>
                                        <td> {{ $row->id }} </td>
                                        <td> {{ $row->name ?? "N/A"}} </td>
                                        <td> {{ $row->description ?? "N/A" }} </td>
                                        <td> {{ $row->start_date }} </td>
                                        <td> {{ $row->customer->first_name }} </td>
                                        <td> {{ $row->room->name }} </td>
                                        <td> {{implode(',',@$rows[0]->features->pluck('name')->toArray())}} </td>
                                        <td> {{ $row->created_at }} </td>
                                        <td> {{ $row->updated_at }} </td>
                                        <td>
                                            @include('projects::actions')
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
