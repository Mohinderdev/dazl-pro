@extends('admin.layouts.app')
@section('page-title', 'project opportunities')
@section('page-sub-title', 'Add new project opportunity')

@section('content')

<div class="row">
    <div class="col-lg-12">

        <!--begin::Portlet-->
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Add new project opportunity
                    </h3>
                </div>
            </div>

            <!--begin::Form-->
            {!! Form:: open(['method' => 'POST', 'route' => "project-opportunities.store", 'files' => true, 'class' => 'kt-form kt-form--label-right']) !!}

            @include ("project-opportunities::form", ['submitButton' => 'Create'])

            {!! Form::close() !!}

            <!--end::Form-->
        </div>

    </div>
</div>

@stop
