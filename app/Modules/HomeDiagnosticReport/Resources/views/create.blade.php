@extends('admin.layouts.app')
@section('page-title', 'home diagnostic reports')
@section('page-sub-title', 'Add new home diagnostic report')

@section('content')

<div class="row">
    <div class="col-lg-12">

        <!--begin::Portlet-->
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Add new home diagnostic report
                    </h3>
                </div>
            </div>

            <!--begin::Form-->
            {!! Form:: open(['method' => 'POST', 'route' => "home-diagnostic-reports.store", 'files' => true, 'class' => 'kt-form kt-form--label-right']) !!}

            @include ("home-diagnostic-reports::form", ['submitButton' => 'Create'])

            {!! Form::close() !!}

            <!--end::Form-->
        </div>

    </div>
</div>

@stop
