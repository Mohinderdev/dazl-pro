<div class="kt-portlet__body">

    @component('admin.fields.text', ['multiLang' => false, 'label' => 'First Name', 'path' => 'customers', 'name' => 'first_name', 'value' => @$row]) @endcomponent
    @component('admin.fields.text', ['multiLang' => false, 'label' => 'Last Name', 'path' => 'customers', 'name' => 'last_name', 'value' => @$row]) @endcomponent
    @component('admin.fields.text', ['multiLang' => false, 'label' => 'Phone Number', 'path' => 'customers', 'name' => 'phone_number', 'value' => @$row]) @endcomponent
    @component('admin.fields.text', ['multiLang' => false, 'label' => 'Company Name', 'path' => 'customers', 'name' => 'company_name', 'value' => @$row]) @endcomponent
    @component('admin.fields.text', ['multiLang' => false, 'label' => 'Company Street Address', 'path' => 'customers', 'name' => 'company_street_address', 'value' => @$row]) @endcomponent
    @component('admin.fields.text', ['multiLang' => false, 'label' => 'Company City', 'path' => 'customers', 'name' => 'company_city', 'value' => @$row]) @endcomponent
    @component('admin.fields.text', ['multiLang' => false, 'label' => 'State', 'path' => 'customers', 'name' => 'state', 'value' => @$row]) @endcomponent
    @component('admin.fields.number', ['multiLang' => false, 'label' => 'Zip Code', 'path' => 'customers', 'name' => 'zip_code', 'value' => @$row]) @endcomponent
    @component('admin.fields.email', ['multiLang' => false, 'label' => 'Email', 'path' => 'customers', 'name' => 'email', 'value' => @$row]) @endcomponent
    @component('admin.fields.multi_select' , ['name' => 'service_type_ids' ,'label' => 'Service Type' , 'list' => $serviceTypes ,'display_column' => 'name' , 'defaultVal' => 'Services' ,'selected' => @$row->serviceTypes]) @endcomponent
    @component('admin.fields.select' , ['name' => 'company_id' ,'label' => 'Company' , 'list' => $companies ,'display_column' => 'name' , 'defaultVal' => 'Companies' ,'selected' => @$row->company_id]) @endcomponent

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
