<div class="kt-portlet__body">
    @component('admin.fields.text', ['multiLang' => false, 'label' => 'Name', 'path' => 'feature-issues', 'name' => 'name', 'value' => @$row]) @endcomponent
    @component('admin.fields.select' , ['name' => 'feature_id' ,'label' => 'Feature' ,'list' => $features ,'display_column' => 'name' , 'defaultVal' => 'Features' ,'selected' => @$row->feature_id]) @endcomponent
        <div class="form-group">
            <label for="feature_id">Feature Option</label>
        <select name="feature_option_id" id="featureOption" class="form-control">
            <option>--Select Feature Option--</option>
        </select>
            <small class="text-danger"></small>
        </div>
    @component('admin.fields.select' , ['name' => 'service_type_id' ,'label' => 'Service Type' , 'list' => $serviceTypes ,'display_column' => 'name' , 'defaultVal' => 'Services' ,'selected' => @$row->service_type_id]) @endcomponent
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
    $( document ).ready(function() {
        var id= $( "[name=feature_id]#single" ).val();
        var optionid= "{{@$row->feature_option_id}}";
        $('#featureOption').empty();

        var url = '{{ route("get_feature_options", ":id") }}';
        url = url.replace(':id',id);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type:'GET',
            url:url,
            success:function(data){

                if(data) {
                    $.each(data.data, function (key, value) {
             if(value.id == optionid){

                 $("#featureOption").append($("<option/>", {
                     value: value.id,
                     text: value.name,
                     selected:true
                 }));
             }
             else{
                 $('#featureOption').append($("<option/>", {
                     value: value.id,
                     text: value.name

                 }));
             }


                    });
                }

            }
        });
    });
    $( "[name=feature_id]#single" ).change(function() {
        $('#featureOption').empty();
        var id= $(this).val();
        var url = '{{ route("get_feature_options", ":id") }}';
        url = url.replace(':id',id);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type:'GET',
            url:url,
            success:function(data){
                $("#featureOption").append('<option>--Select Feature Option--</option>');
                if(data) {
                    $.each(data.data, function (key, value) {

                        $('#featureOption').append($("<option/>", {
                            value: value.id,
                            text: value.name
                        }));
                    });
                }

            }
        });
    });
</script>
