@extends('admin.layouts.app')
@section('page-title', 'Cities')
@section('page-sub-title', 'Update city')

@section('content')

<div class="row">
    <div class="col-lg-12">

        <!--begin::Portlet-->
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Update city
                    </h3>
                </div>
            </div>

            <!--begin::Form-->
            {!! Form::model($row, ['method' => 'PATCH', 'route' => ["cities.update", $row->id], 'files' => true, 'class' => 'kt-form kt-form--label-right']) !!}

                @include ("city::form", ['submitButton' => 'Update'])

            {!! Form::close() !!}

            <!--end::Form-->
        </div>

    </div>
</div>

@stop
