@extends('admin.layouts.app')
@section('page-title', 'Currencies')
@section('page-sub-title', 'Currencies list')
@section('page-actions')
    <div class="kt-subheader__toolbar">
        <div class="kt-subheader__wrapper">
            <a href="{{ route('currencies.create') }}" class="btn btn-primary">
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
                    Currencies List
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
                                <th> Created at </th>
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
                ajax: '{!! route('currencies.json') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'actions', name: 'actions' }
                ]
            });
        });
    </script>

@endpush
