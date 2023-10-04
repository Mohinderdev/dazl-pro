<div class="kt-portlet__body">

    @component('admin.fields.text', ['multiLang' => true, 'label' => __('name'), 'path'  => 'city', 'name' => 'name', 'value' => @$row]) @endcomponent
    @component('admin.fields.select', ['multiLang' => true,'label' => __('country'), 'path'  => 'city', 'name' => 'country_id', 'dispaly_column' => 'name', 'list' => $countries , 'value' => @$row , 'selected' => @$row->country_id]) @endcomponent

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
