<div class="kt-portlet__body">
    @component('admin.fields.text', ['multiLang' => false, 'label' => 'Name', 'path' => 'projects', 'name' => 'name', 'value' => @$row]) @endcomponent
    @component('admin.fields.textarea', ['multiLang' => false, 'label' => 'Description', 'path' => 'projects', 'name' => 'description', 'value' => @$row]) @endcomponent
    @component('admin.fields.date', ['multiLang' => false, 'label' => 'Start Date', 'path' => 'projects', 'name' => 'start_date', 'value' => @$row]) @endcomponent
    @component('admin.fields.select' , ['name' => 'customer_id' ,'label' => 'Customer' , 'list' => $customers ,'display_column' => 'first_name' , 'defaultVal' => 'Customers' ,'selected' => @$row->customer_id]) @endcomponent
    @component('admin.fields.select' , ['name' => 'room_id' ,'label' => 'Room' , 'list' => $rooms ,'display_column' => 'name' , 'defaultVal' => 'Room' ,'selected' => @$row->room_id]) @endcomponent
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
