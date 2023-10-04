@extends('admin.layouts.app')
@section('page-title', 'blog category')
@section('page-sub-title', 'Update blog category')

@section('content')

<div class="row">
    <div class="col-lg-12">

        <!--begin::Portlet-->
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Update blog category
                    </h3>
                </div>
            </div>

            <!--begin::Form-->
            {!! Form::model($row, ['method' => 'PATCH', 'route' => ["blog-categories.update", $row->id], 'files' => true, 'class' => 'kt-form kt-form--label-right']) !!}

                @include ("blog-categories::form", ['submitButton' => 'Update'])

            {!! Form::close() !!}

            <!--end::Form-->
        </div>

    </div>
</div>

@stop
