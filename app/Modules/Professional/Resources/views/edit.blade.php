@extends('admin.layouts.app')
@section('page-title', 'professional')
@section('page-sub-title', 'Update professional')

@section('content')

<div class="row">
    <div class="col-lg-12">

        <!--begin::Portlet-->
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Update professional
                    </h3>
                </div>
            </div>

            <!--begin::Form-->
            {!! Form::model($row, ['method' => 'PATCH', 'route' => ["professionals.update", $row->id], 'files' => true, 'class' => 'kt-form kt-form--label-right']) !!}

                @include ("professionals::form", ['submitButton' => 'Update'])

            {!! Form::close() !!}

            <!--end::Form-->
        </div>

    </div>
</div>

@stop
