<div class="kt-portlet__body">

    <div class="form-group row">
        <div class="col-lg-6">
            <label> Name: </label>
            {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter name']) }}
            <span class="m-form__help form-validation-help text-danger">
                {{ $errors->first('name') }}
            </span>
        </div>

        <div class="col-lg-6">
            <label> Code: </label>
            {{ Form::text('code', null, ['class' => 'form-control', 'placeholder' => 'Enter code']) }}
            <span class="m-form__help form-validation-help text-danger">
                {{ $errors->first('code') }}
            </span>
        </div>
    </div>

</div>

<div class="kt-portlet__foot">
    <div class="kt-form__actions">
        <div class="row">
            <div class="col-lg-6">
                <button type="submit" class="btn btn-primary submit_button"> {{ $submitButton }} </button>
                <button type="reset" class="btn btn-secondary"> Cancel </button>
            </div>
        </div>
    </div>
</div>
