<div class="kt-portlet__body">
    @component('admin.fields.text', ['multiLang' => false, 'label' => 'Name', 'path' => 'houses', 'name' => 'name', 'value' => @$row]) @endcomponent
    @component('admin.fields.number', ['multiLang' => false, 'label' => 'Square Feet', 'path' => 'houses', 'name' => 'square_feet', 'value' => @$row]) @endcomponent
    @component('admin.fields.number', ['multiLang' => false, 'label' => 'Bathrooms', 'path' => 'houses', 'name' => 'bathrooms_number', 'value' => @$row]) @endcomponent
    @component('admin.fields.number', ['multiLang' => false, 'label' => 'Bedrooms', 'path' => 'houses', 'name' => 'bedrooms_number', 'value' => @$row]) @endcomponent
    @component('admin.fields.text', ['multiLang' => false, 'label' => 'Year Built', 'path' => 'houses', 'name' => 'year_built', 'value' => @$row]) @endcomponent
    @component('admin.fields.select' , ['name' => 'realtor_id' ,'label' => 'Realtor' , 'list' => $realtors ,'display_column' => 'first_name' , 'defaultVal' => 'Realtors' ,'selected' => @$row->realtor_id]) @endcomponent
    @component('admin.fields.select' , ['name' => 'customer_id' ,'label' => 'Customer' , 'list' => $customers ,'display_column' => 'first_name' , 'defaultVal' => 'Customers' ,'selected' => @$row->customer_id]) @endcomponent
    @component('admin.fields.file' , ['multi_upload' => true , 'name' => 'file[]' ,'label' => 'File']) @endcomponent
    @component('admin.fields.images' ,['images' => @$row->images]) @endcomponent
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
