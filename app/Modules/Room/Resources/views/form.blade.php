<style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        display: none;
        margin: 0;
    }

    / Firefox /
    input[type=number] {
        -moz-appearance: textfield;
    }
</style>
<div class="kt-portlet__body">

    @component('admin.fields.text', ['multiLang' => false, 'label' => 'Name', 'path' => 'rooms', 'name' => 'name', 'value' => @$row]) @endcomponent
    @component('admin.fields.number', ['multiLang' => false, 'label' => 'Percentage', 'path' => 'percentage', 'name' => 'percentage', 'value' => @$row]) @endcomponent
    @component('admin.fields.file' , ['multi_upload' => true , 'name' => 'image' ,'label' => 'Image','path' => 'rooms', 'name' => 'image', 'value' => @$row]) @endcomponent
    <?php
$arr = [];
if (isset($row) && !empty($row)){
    foreach ( $row->features()->get() as $key => $feat){
        array_push($arr,$feat->feature_id);
    }

}
        $arr2 = [];
        if (isset($row) && !empty($row)){
            foreach ( $row->additional()->get() as $key => $addit){
                array_push($arr2,$addit->additional_values_id);
            }

        }
    $arr3 = [];
    if (isset($row) && !empty($row)){
        foreach ( $row->type()->get() as $key => $typess){
            array_push($arr3,$typess->type_id);
        }

    }


        ?>


@foreach($features as $feature)
    <div class="form-group_1 {{$feature->name}}">
        <input type="checkbox" name="featureids[]" value="{{$feature->id}}"
            <?php
                if ($feature->name == "None") {
                    echo 'checked';
                    echo ' onclick="return false"';
                } elseif (in_array($feature->id, $arr)) {
                    echo 'checked';
                }
            ?>
        >
        <label for="">{{$feature->name}}</label>
    </div>
@endforeach



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

