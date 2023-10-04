@extends('admin.layouts.app')
@section('page-title', 'Countries')
@section('page-sub-title', 'Countries list')
@section('page-actions')
    <div class="kt-subheader__toolbar">
        <div class="kt-subheader__wrapper">
            <a href="{{ route('countries.create') }}" class="btn btn-primary">
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
                    Countries list
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
                                @foreach ($languages as $language)
                                    <th> @lang('country::lang.name_'.$language->code) </th>
                                @endforeach
                                <th> Flag </th>
                                <th> Currency </th>
                                <th> Created at </th>
                                <th> Actions </th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($rows as $row)
                                    <tr>
                                        <td> {{ $row->id }} </td>
                                        @foreach ($languages as $language)
                                            <td>
                                                {{ json_decode($row->name, true)[$language->code] }}
                                            </td>
                                        @endforeach
                                        <td>
                                            <img src="{{ asset($row->flag) }}" style="max-height: 50px">
                                        </td>
                                        <td> {{ optional($row->currency)->name }} </td>
                                        <td> {{ $row->created_at }} </td>
                                        <td>
                                            @include('country::actions')
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