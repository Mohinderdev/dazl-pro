@extends('admin.layouts.app')
@section('page-title', 'Currencies')
@section('page-sub-title', 'Update currency')

@section('content')

<div class="row">
    <div class="col-lg-12">

        <!--begin::Portlet-->
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Update currency
                    </h3>
                </div>
            </div>

            <!--begin::Form-->
            {!! Form::model($row, ['method'=>'PATCH', 'route' => ["currencies.update", $row->id], 'files'=>true, 'class' => 'kt-form kt-form--label-right']) !!}

            @include ("currency::form", ['submitButton' => 'Update'])

            {!! Form::close() !!}

            <!--end::Form-->
        </div>

    </div>
</div>

@stop
