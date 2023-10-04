@extends('admin.layouts.app')
@section('page-title', 'Units')
@section('page-sub-title', 'Units list')

@section('content')

<div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon">
                    <i class="kt-font-brand flaticon2-line-chart"></i>
                </span>
                <h3 class="kt-portlet__head-title">
                    Normal Users
                </h3>
            </div>
        </div>
        <div class="kt-portlet__body">

            <!--begin: Datatable -->
            <div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-striped- table-bordered table-hover table-checkable" id="data-table">
                            <thead>
                            <tr>
                                <th> Id </th>
                                <th> Name </th>
                                <th> Email </th>
                                <th> Country </th>
                                <th> Register way </th>
                                <th> Status </th>
                                <th> Registered at </th>
                                <th> Actions </th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@push('scripts')

    <script>
        $(function() {
            $('#data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('users.json') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'email', name: 'email' },
                    { data: 'country_id', name: 'country_id' },
                    { data: 'register_way', name: 'register_way' },
                    { data: 'is_active', name: 'is_active' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'actions', name: 'actions' }
                ]
            });
        });
    </script>

@endpush
