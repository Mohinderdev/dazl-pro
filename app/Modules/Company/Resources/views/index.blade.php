@extends('admin.layouts.app')
@section('page-title', 'projects')
@section('page-sub-title', 'projects list')
@section('page-actions')
    <div class="kt-subheader__toolbar">
        <div class="kt-subheader__wrapper">
            <a href="{{ route('companies.create') }}" class="btn btn-primary">
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
                                <th> Phone </th>
                                <th> Email </th>
                                <th> Website </th>
                                <th> Address </th>
                                <th> References </th>
                                <th> Description </th>
                                <th> Business Licence </th>
                                <th> Project Portfolio </th>
                                <th> Years in business </th>
                                <th> Insurance Certificate </th>
                                <th> Created at </th>
                                <th> Actions </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($rows as $row)
                                <tr>
                                    <td> {{ $row->id }} </td>
                                    <td> {{ $row->name }} </td>
                                    <td> {{ $row->phone }} </td>
                                    <td> {{ $row->email }} </td>
                                    <td> {{ $row->website }} </td>
                                    <td> {{ $row->address }} </td>
                                    <td> {{ $row->references }} </td>
                                    <td> {{ $row->description }} </td>
                                    <td> {{ $row->business_licence }} </td>
                                    <td> {{ $row->project_portfolio }} </td>
                                    <td> {{ $row->years_in_business }} </td>
                                    <td> {{ $row->insurance_certificate }} </td>
                                    <td> {{ $row->created_at }} </td>
                                    <td>
                                        @include('companies::actions')
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
