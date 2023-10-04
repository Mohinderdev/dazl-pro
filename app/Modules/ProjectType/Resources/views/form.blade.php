<div class="kt-portlet__body">

    @component('admin.fields.text', ['multiLang' => false, 'label' => 'Name', 'path' => 'project-types', 'name' => 'name', 'value' => @$row]) @endcomponent
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
