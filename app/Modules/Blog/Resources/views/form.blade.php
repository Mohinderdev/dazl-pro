

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
<div class="kt-portlet__body">

    @component('admin.fields.text', ['multiLang' => false, 'label' => 'Title', 'path' => 'blogs', 'name' => 'title', 'value' => @$row]) @endcomponent
    @component('admin.fields.select' , ['name' => 'category_id' ,'label' => 'Blog Category' ,'list' => $category ,'display_column' => 'name' , 'defaultVal' => 'Category' ,'selected' => @$row->category_id]) @endcomponent
    @component('admin.fields.file', ['multi_upload' => true , 'label' => 'Image', 'path' => 'blogs', 'name' => 'image', 'value' => @$row]) @endcomponent
        <div class="container">
            <div class="row">
                <div class="col" style="max-width: 300px;">
                    <img class="image" src="{{@$row->image}}">
                </div>
            </div><br>
        </div>
        <input type="hidden" name="prev" value="{{@$row->image}}">
{{--    @component('admin.fields.textarea', ['multiLang' => false, 'label' => 'Description', 'path' => 'blogs', 'name' => 'description', 'value' => @$row]) @endcomponent--}}
        <div class="form-group">
            <label for="Description">Description</label>
            <textarea class="form-control" rows="3" id="editor" name="description" cols="50">{{@$row->description}}</textarea>
            <small class="text-danger">  </small>
        </div>

        @component('admin.fields.date', ['multiLang' => false, 'label' => 'Publish Date', 'path' => 'blogs', 'name' => 'publish', 'value' => @$row]) @endcomponent
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
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
