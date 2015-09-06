jQuery.validator.addMethod("captcha", function(value, element) {
  	if(grecaptcha.getResponse() != '') {
        return true;
        console.log('1');
    } else {
        return false;
        console.log('2');
    }
}, "Please complete the captcha");
var ContactForm = function () {

    return {
        
        //Contact Form
        initContactForm: function () {
	        // Validation
	        $("#sky-form3").validate({
	            // Rules for form validation
	            rules:
	            {
	                name:
	                {
	                    required: true
	                },
	                address:
	                {
	                    required: true
	                },
	                recaptcha:
	                {
	                    captcha: true
	                }
	            },
	                                
	            // Messages for form validation
	            messages:
	            {
	                name:
	                {
	                    required: 'Please enter your Server Name'
	                },
	                address:
	                {
	                    required: 'Please enter your Server address'
	                },
	                recaptcha:
	                {
	                	captcha: 'Please complete the captcha'
	                }
	            },
	                                
	            // Ajax form submition                  
	            submitHandler: function(form)
	            {
	                $(form).ajaxSubmit(
	                {
	                    beforeSend: function()
	                    {
	                        $('#sky-form3 button[type="submit"]').attr('disabled', true);
	                    },
	                    success: function()
	                    {
	                        $("#sky-form3").addClass('submited');
	                    }
	                });
	            },
	            
	            // Do not change code below
	            errorPlacement: function(error, element)
	            {
	                error.insertAfter(element.parent());
	            }
	        });
        }

    };
    
}();