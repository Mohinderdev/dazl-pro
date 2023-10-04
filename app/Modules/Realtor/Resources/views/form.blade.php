<div class="kt-portlet__body">

    @component('admin.fields.text', ['multiLang' => false, 'label' => 'First Name', 'path' => 'customers', 'name' => 'first_name', 'value' => @$row]) @endcomponent
    @component('admin.fields.text', ['multiLang' => false, 'label' => 'Last Name', 'path' => 'customers', 'name' => 'last_name', 'value' => @$row]) @endcomponent
    @component('admin.fields.text', ['multiLang' => false, 'label' => 'Phone Number', 'path' => 'customers', 'name' => 'phone_number', 'value' => @$row]) @endcomponent
    @component('admin.fields.text', ['multiLang' => false, 'label' => 'Real State Agency Name', 'path' => 'customers', 'name' => 'real_state_agency_name', 'value' => @$row]) @endcomponent
    @component('admin.fields.text', ['multiLang' => false, 'label' => 'City Of Real State Agency', 'path' => 'customers', 'name' => 'city_of_real_state_agency', 'value' => @$row]) @endcomponent
    @component('admin.fields.text', ['multiLang' => false, 'label' => 'State', 'path' => 'customers', 'name' => 'state', 'value' => @$row]) @endcomponent
    @component('admin.fields.number', ['multiLang' => false, 'label' => 'Zip Code', 'path' => 'customers', 'name' => 'zip_code', 'value' => @$row]) @endcomponent
    @component('admin.fields.email', ['multiLang' => false, 'label' => 'Email', 'path' => 'customers', 'name' => 'email', 'value' => @$row]) @endcomponent

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
