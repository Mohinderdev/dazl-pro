<div class="kt-portlet__body">

    @component('admin.fields.textarea', ['multiLang' => false, 'label' => 'Message', 'path' => 'project-opportunities', 'name' => 'message', 'value' => @$row]) @endcomponent
    @component('admin.fields.checkbox', ['multiLang' => false, 'label' => 'Is interested', 'path' => 'project-opportunities', 'name' => 'isInterested', 'value' => @$row]) @endcomponent
    @component('admin.fields.date', ['multiLang' => false, 'label' => 'Interest Date', 'path' => 'project-opportunities', 'name' => 'interest_date', 'value' => @$row]) @endcomponent
    @component('admin.fields.select' , ['name' => 'project_id' ,'label' => 'Projects' , 'list' => $projects ,'display_column' => 'name' , 'defaultVal' => 'Projects' ,'selected' => @$row->project_id]) @endcomponent
    @component('admin.fields.select' , ['name' => 'customer_id' ,'label' => 'Customers' , 'list' => $customers ,'display_column' => 'first_name' , 'defaultVal' => 'Customers' ,'selected' => @$row->customer_id]) @endcomponent
    @component('admin.fields.select' , ['name' => 'professional_id' ,'label' => 'Professionals' , 'list' => $professionals ,'display_column' => 'first_name' , 'defaultVal' => 'Professionals' ,'selected' => @$row->professional_id]) @endcomponent

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
