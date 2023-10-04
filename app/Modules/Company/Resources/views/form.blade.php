<div class="kt-portlet__body">

    @component('admin.fields.text', ['multiLang' => false, 'label' => 'Name', 'path' => 'companies', 'name' => 'name', 'value' => @$row]) @endcomponent
        @component('admin.fields.file', ['multi_upload' => false, 'label' => 'Insurance Certificate', 'path' => 'customers', 'name' => 'file', 'value' => @$row]) @endcomponent
        <div class="container">
            <div class="row">
                <div class="col" style="max-width: 300px;">
                    <img class="image" src="{{@$row->insurance_certificate}}">
                </div>
            </div><br>
        </div>
        <input type="hidden" name="prev" value="{{@$row->insurance_certificate}}">

        @component('admin.fields.file', ['multi_upload' => true, 'label' => 'Project Portfolio', 'path' => 'customers', 'name' => 'portfolio[]', 'value' => @$row]) @endcomponent
        @component('admin.fields.images' ,['images' => @$row->images]) @endcomponent
        @component('admin.fields.text', ['multiLang' => false, 'label' => 'References', 'path' => 'customers', 'name' => 'references', 'value' => @$row]) @endcomponent
        @component('admin.fields.text', ['multiLang' => false, 'label' => 'Website', 'path' => 'customers', 'name' => 'website', 'value' => @$row]) @endcomponent

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
