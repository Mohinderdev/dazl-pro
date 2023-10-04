@extends('admin.layouts.app')
@section('page-title', 'room issues')
@section('page-sub-title', 'Add new room issue')

@section('content')

<div class="row">
    <div class="col-lg-12">

        <!--begin::Portlet-->
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Add new room issue
                    </h3>
                </div>
            </div>

            <!--begin::Form-->
            {!! Form:: open(['method' => 'POST', 'route' => "room-issues.store", 'files' => true, 'class' => 'kt-form kt-form--label-right']) !!}

            @include ("room-issues::form", ['submitButton' => 'Create'])

            {!! Form::close() !!}

            <!--end::Form-->
        </div>

    </div>
</div>

@stop
