(function($){
       $(document).ready(function(){
        
        jQuery('#edit-field-other-branches-und-0-value').blur(function() {
            if($('#edit-field-other-branches-und-0-value').val() == ""){
                var text = "Input Branch Name, address, city, zip code, phone, email, contact name and counties served by that branch";
                $("#edit-field-other-branches-und-0-value").val(text);
            }
        
        });
        
        jQuery('#edit-field-other-branches-und-0-value').click(function() {
            if($('#edit-field-other-branches-und-0-value').val() == "Input Branch Name, address, city, zip code, phone, email, contact name and counties served by that branch"){
                var text = "";
                $("#edit-field-other-branches-und-0-value").val(text);
            }
        
        });
        
        jQuery('#edit-field-other-branches-und-0-value').focus(function() {
            if($('#edit-field-other-branches-und-0-value').val() == "Input Branch Name, address, city, zip code, phone, email, contact name and counties served by that branch"){
                var text = "";
                $("#edit-field-other-branches-und-0-value").val(text);
            }
        
        });
        
    });
})(jQuery);