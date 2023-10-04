<div class="kt-portlet__body">
    @component('admin.fields.text', ['multiLang' => false, 'label' => 'Name', 'path' => 'room-issues', 'name' => 'name', 'value' => @$row]) @endcomponent
    @component('admin.fields.select' , ['name' => 'room_id' ,'label' => 'Room' , 'list' => $rooms ,'display_column' => 'name' , 'defaultVal' => 'Rooms' ,'selected' => @$row->room_id]) @endcomponent
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
