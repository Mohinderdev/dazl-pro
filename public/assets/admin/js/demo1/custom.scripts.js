$(document).ready(function() {

    // add spinner to form button on click
    $(".kt-form").submit(function(){
        $(this).find(".submit_button").addClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', 'disabled');
    });

    // add spinner to button on click
    $(document).on('click','.activation-btn',function(e){
        $(this).addClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light');
    });

});

