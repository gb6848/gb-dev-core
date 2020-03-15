/**
 * Created by Gregor on 10.3.2020.
 */

var customAlert = function($type, $message){
    Swal.fire({
        type: $type,
        title: $message,
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    })
};

var helper_CheckBox = function(){
    $( ".custom-checkbox-change-event" ).change(function() {
        $(this).closest( ".form-group").find( ".custom-checkbox-input")
        if ($(this).is(':checked')) {
            $(this).closest( ".form-group").find( ".custom-checkbox-input").val(1);
            $(this).closest( ".form-group").find( ".custom-checkbox-input").prop( "checked", true );
        }else{
            $(this).closest( ".form-group").find( ".custom-checkbox-input").val(0);
            $(this).closest( ".form-group").find( ".custom-checkbox-input").prop( "checked", false );
        }
    });

    $(".custom-checkbox-event").on("click", function(){
        $(this).closest( ".form-group").find( ".custom-checkbox-input")
        if ($(this).is(':checked')) {
            $(this).closest( ".form-group").find( ".custom-checkbox-input").val(1);
            $(this).closest( ".form-group").find( ".custom-checkbox-input").prop( "checked", true );
        }else{
            $(this).closest( ".form-group").find( ".custom-checkbox-input").val(0);
            $(this).closest( ".form-group").find( ".custom-checkbox-input").prop( "checked", false );
        }
    })
};