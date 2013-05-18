(function($) {
    $(document).ready(function(){
        //Show the total value as per the category selection
        $('#user-register-form .form-item-pricing .form-item-pricing .form-radio').click(function(){
            var price = $(this).val();
            $('.total_value .total_val .amount').html(price);
        });
        
        //Max Length in Memorial
        $('#edit-memorial-description').after('<div id="charLeft"><span></span></div>');
       /* $('#edit-memorial-description').keyup(function() {
            var len = this.value.length;
            if (len >= 150) {
                this.value = this.value.substring(0, 15);
            }
            $('#charLeft').text(15 - len);
        }); */
        
        $('#edit-memorial-description').each(function(){  
            //maximum limit of characters allowed.  
            var maxlimit = 4000;  
            // get current number of characters  
            var length = $(this).val().length;  
            if(length >= maxlimit) {  
                $(this).val($(this).val().substring(0, maxlimit));  
                length = maxlimit;  
            }  
            // update count on page load  
            $(this).parent().find('.counter').html( (maxlimit - length) + ' characters left');  
            // bind on key up event  
            $(this).keyup(function(){  
                // get new length of characters  
                var new_length = $(this).val().length;  
                if(new_length >= maxlimit) {  
                  $(this).val($(this).val().substring(0, maxlimit));  
                  //update the new length  
                  new_length = maxlimit;  
                 }  
                // update count  
                $(this).parent().find('#charLeft span').html( (maxlimit - new_length) + ' characters left');  
            });  
        });  
        
    });
}(jQuery));
