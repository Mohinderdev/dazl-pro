@extends('admin.layouts.app')
@section('page-title', 'Feature Options')
@section('page-sub-title', 'Add New Feature Option')

@section('content')

<div class="row">
    <div class="col-lg-12">

        <!--begin::Portlet-->
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Add New Feature Option
                    </h3>
                </div>
            </div>

            <!--begin::Form-->
            {!! Form:: open(['method' => 'POST', 'route' => "feature-options.store", 'files' => true, 'class' => 'kt-form kt-form--label-right']) !!}

            @include ("feature-options::form", ['submitButton' => 'Create'])

            {!! Form::close() !!}

            <!--end::Form-->
        </div>

    </div>
</div>

@stop
