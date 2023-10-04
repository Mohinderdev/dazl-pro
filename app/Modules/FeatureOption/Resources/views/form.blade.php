<style>
    div#items .row {
        display: flex;
        flex-wrap: wrap;
        width: 100%;
    }

    #oldtextinput [value]{
        display: none;
    }
</style>
@if ($message = Session::get('message'))

    <div class="alert alert-success alert-block">

        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>

    </div>

@endif
<div class="kt-portlet__body">
    @component('admin.fields.text', ['multiLang' => false, 'label' => 'Name', 'path' => 'feature-options', 'name' => 'name', 'value' => @$row]) @endcomponent
    @component('admin.fields.select' , ['name' => 'feature_id' ,'label' => 'Features' , 'list' => $features ,'display_column' => 'name' , 'defaultVal' => 'Features' ,'selected' => @$row->feature_id]) @endcomponent



        <div id="items" class="form-group">
            @if(isset($row))

                @forelse($row['featureissues'] as $fetures)
                    <div class="row">
                        <div class="col-md-5 margin-bottom">
                            <label class="control-label" for="textinput" style="text-align: left">Issues</label>
                    <input id="oldtextinput" name="oldtextinputtext[]" type="text" placeholder="{{$fetures->name}}" value="{{$fetures->name}}" class="form-control input-md"><br/>
                        <input type="hidden" name="oldtextinputid[]"  value="{{$fetures->id}}">

                        </div>
                    <div class="col-md-6 form-group">
                        <label for="feature_id"> Service Type</label>
                        <select name="service_type_id[]" id="single" class="form-control">
                            @foreach($serviceTypes as $serv)
                                @if($serv->id == $fetures->service_type_id)
                                    <option value="{{$serv->id}}" selected>{{$serv->name}}</option>
                                @else
                                    <option value="{{$serv->id}}">{{$serv->name}}</option>
                                @endif

                            @endforeach
                        </select>
                        <small class="text-danger"></small>
                    </div>
                        <div class="col-md-1 form-group" style="padding: 33px;">
                            <a class="flaticon-delete-1 actions-icon" href="{{ route('deleteIssue', $fetures->id) }}"> </a>
                    </div>
                    </div>
                    @endforeach
                    @endif
                    <div class="row" style="padding-bottom: 34px;">
                        <div class="col-md-4 margin-bottom">
                            <label class="control-label" for="textinput" style="text-align: left">Need Dazl Score</label>

                            <input type="number" placeholder="Enter Score" value="{{@$row['featurescore'][0]->score}}" name="need_dazl" class="form-control input-md">
                            <input type="hidden"  value="{{@$row['featurescore'][0]->id}}" name="need_dazl_id" class="form-control input-md">

                        </div><div class="col-md-4 margin-bottom">
                            <label class="control-label" for="textinput" style="text-align: left">Market Ready Score</label>

                            <input type="number" placeholder="Enter Score" value="{{@$row['featurescore'][1]->score}}" name="market_dazl" class="form-control input-md">
                            <input type="hidden"  value="{{@$row['featurescore'][1]->id}}" name="market_dazl_id" class="form-control input-md">

                        </div>
                        <div class="col-md-4 margin-bottom">
                            <label class="control-label" for="textinput" style="text-align: left">Dazzling Score</label>

                            <input type="number" placeholder="Enter Score" value="{{@$row['featurescore'][2]->score}}" name="dazzling" class="form-control input-md">
                            <input type="hidden" value="{{@$row['featurescore'][2]->id}}" name="dazzling_id" class="form-control input-md">

                        </div>
                    </div>

            <div class="row">
            <div class="col-md-6 margin-bottom">
                <label class="control-label" for="textinput" style="text-align: left">New Issues</label>

                <input id="textinput" name="textinput[]" type="text" placeholder="Enter Issue" class="form-control input-md">

            </div>

                            <div class="col-md-6 form-group">
                                <label for="feature_id"> Service Type</label>
                                <select name="service_type_id[]" id="single" class="form-control">
                                    @foreach($serviceTypes as $serv)
                                        <option value="{{$serv->id}}">{{$serv->name}}</option>
                                    @endforeach
                                </select>
                                <small class="text-danger"></small>
                            </div>

            </div>

        </div>

        <button id="add" class="btn add-more button-yellow uppercase" type="button">+ Add another Issues</button> <button class="delete btn button-white uppercase" type="button">- Remove referral</button>

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
    $(document).ready(function() {
        $(".delete").hide();
        //when the Add Field button is clicked
        $("#add").click(function(e) {
            $(".delete").fadeIn("1500");
            //Append a new row of code to the "#items" div
            var array = $.map(Array(26), function(value, index) {
                return String.fromCharCode(65 + index);
            });


            $("#items").append(

                '<div class="row next-referral"><div class="col-md-6 margin-bottom"><input id="textinput" name="textinput[]" type="text" placeholder="Enter Another Issue" class="form-control input-md"> </div>  <div class="col-md-6 form-group"> <select name="service_type_id[]" id="single" class="form-control">@foreach($serviceTypes as $serv)<option value="{{$serv->id}}">{{$serv->name}}</option>@endforeach</select> <small class="text-danger"></small> </div></div></div>'
            );
        });
        $("body").on("click", ".delete", function(e) {
            $(".next-referral").last().remove();
        });
    });

</script>
