<div class="kt-portlet__body">

        @component('admin.fields.text', ['multiLang' => false, 'label' => __('slug'), 'path' => 'categories', 'name' => 'slug', 'value' => @$row]) @endcomponent
        @component('admin.fields.text', ['multiLang' => true, 'label' => __('title'), 'path' => 'categories', 'name' => 'title', 'value' => @$row]) @endcomponent
        @component('admin.fields.file', ['label' => __('image'), 'path' => 'categories', 'name' => 'image']) @endcomponent
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
