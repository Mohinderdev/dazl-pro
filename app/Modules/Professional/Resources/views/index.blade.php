
@extends('admin.layouts.app')
@section('page-title', 'professionals')
@section('page-sub-title', 'professionals list')
@section('page-actions')
    <div class="kt-subheader__toolbar">
        <div class="kt-subheader__wrapper">
            <a href="{{ route('professionals.create') }}" class="btn btn-primary">
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
                                <th> First Name </th>
                                <th> Last Name </th>
                                <th> Email </th>
                                <th> Phone Number </th>
                                <th> State </th>
                                <th> Company Name </th>
                                <th> Company Street Address </th>
                                <th> Company City </th>
                                <th> Zip Code </th>
                                <th> Service Type </th>
                                <th> Company </th>
                                <th> Created at </th>
                                <th> Actions </th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($rows as $row)
                                    <tr>
                                        <td> {{ $row->id }} </td>
                                        <td> {{ $row->first_name }} </td>
                                        <td> {{ $row->last_name }} </td>
                                        <td> {{ $row->email }} </td>
                                        <td> {{ $row->phone_number }} </td>
                                        <td> {{ $row->state }} </td>
                                        <td> {{ $row->company_name }} </td>
                                        <td> {{ $row->company_street_address }} </td>
                                        <td> {{ $row->company_city }} </td>
                                        <td> {{ $row->zip_code }} </td>
                                        <td> @foreach($row->serviceTypes as $key => $serviceType) {{$serviceType->name}} @if($key !== sizeof($row->serviceTypes) - 1) , @endif @endforeach </td>
                                        <td> {{ $row->company->name??'-' }} </td>
                                        <td> {{ $row->created_at }} </td>
                                        <td>
                                            @include('professionals::actions')
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
