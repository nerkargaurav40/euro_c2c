$(function(){
    $('#frm_login').validate({
        rules:{
            'username':'required',
            'password':'required'
        },
        messages:{
            'username': 'Please enter username',
            'password': 'Please enter password'
        },
        submitHandler: function(form) {
            //var formData = new FormData($("#frm_login")[0]);
			$.ajax({
                url:b_url+'entertheadmin/login',
                method:'POST',
                dataType:'json',
                data:$(form).serialize(),
                success:function(response){
                    
                    if(response.status=='error')
                    {
                        $('.error_message').html('').html(response.error);
                    }else if(response.status=='success'){
                        window.location.href=b_url+'entertheadmin/dashboard';
                    }
                }
            })
		}
    });
    $.validator.addMethod("alpha", function(value, element) {
        return this.optional(element) || value == value.match(/^[a-zA-Z\s]+$/);
        // --                                    or leave a space here ^^
    }); 
    jQuery.validator.addMethod("alphanumeric", function(value, element) {
        return this.optional(element) || /^[\w.]+$/i.test(value);
    }, "Letters, numbers, and underscores only please");
    $('#frm_emp').validate({
        rules:{
            'empName':{
                required: true,
                alpha: true
            },
            'empCode':{
                required: true,
                alphanumeric: true
            },
            'empVertical':{
                required:true,
            },
            'empDesignation':{
                required: true,
                alpha: true
            },
            'empPhone':{
                required:true,
                number: true,
                minlength: 10,
                maxlength:10
            },
            'captcha':{
                required:true,
            },
        },
        messages:{
            'empName': {
                required:'Please enter name',
                alpha:'Please enter only aplhabets.'
            },
            'empCode': {
                required:'Please enter code.',
                alphanumeric:'Please enter only alpha numeric characters.',
            },
            'empVertical':{
                required:'Please select vertical.',
            },
            'empDesignation':{
                required:'Please enter designation',
                alpha:'Please enter only alphabets.'
            },
            'empPhone':{
                required:'Please enter mobile number.',
                number:'Please enter only numbers.',
                minlength:'Please enter at least 10 numbers.',
                maxlength:'Please enter no more than 10 numbers.'
            },
            'captcha':{
                required:'Please enter captcha',
            }

        },
        submitHandler: function(form) {
            $.ajax({
                url:b_url+'home/empDetails',
                method:'POST',
                dataType:'json',
                data:$(form).serialize(),
                success:function(response){
                    // /console.log(response);
                    if(response.status=='error')
                    {
                        $('.error_message').html('').html(response.error);
                        $('.alert').fadeIn('slow');
                    }else if(response.status=='success'){
                        window.location.href=b_url+'customer-details';
                    }else if(response.status=='limiterror')
                    {
                        window.location.href=b_url+'limitexceeds';
                    }
                }
            })
		}
    });

    $('#frm_customer').validate({
        rules:{
            'custName':{
                required: true,
                alpha: true
            },
            'custEmail':{
                required: true,
                email: true
            },

            'custLocation':{
                required: true,
                alpha: true
            },
            'custAge':{
                required:true,
                number:true,
                minlength:1,
                maxlength:3
            },
            'custSex':{
                required: true,
            },
            'custNomember':{
                required:true,
                number: true,
            },
            'custEFL':{
                required:true
            },
            'custMobile':{
                required:true,
                number: true,
                minlength: 10,
                maxlength:10
            }
        },
        messages:{
            'custName': {
                required:'Please enter name',
                alpha:'Please enter only aplhabets.'
            },
            'custEmail':{
                required:'Please enter email address.',
                email:'Please enter valid emial address.'
            },
            'custLocation': {
                required:'Please enter location.',
                alpha:'Please enter only alpha numeric characters.',
            },
            'custAge':{
                required:'Please enter age.',
                number:'Please enter only numbers.',
                minlength:'Please enter at least 1 numbers.',
                maxlength:'Please enter no more than 3 numbers.'
            },
            'custSex':{
                required:'Please select sex',
            },
            'custNomember':{
                required:'Please enter no of member in family.',
                number:'Please enter only numbers.',
            },
            'custEFL':{
                required:'Please select EFL option.'
            },
            'custMobile':{
                required:'Please enter mobile number.',
                number:'Please enter only numbers.',
                minlength:'Please enter at least 10 numbers.',
                maxlength:'Please enter no more than 10 numbers.'
            }

        },
        submitHandler: function(form) {
            $.ajax({
                url:b_url+'home/custInsert',
                method:'POST',
                dataType:'json',
                data:$(form).serialize(),
                success:function(response){
                    
                    if(response.status=='error')
                    {
                        $('.error_message').html('').html(response.error);
                        $('.alert').fadeIn('slow');
                    }else if(response.status=='success'){
                        window.location.href=b_url+'quiz';
                    }
                }
            })
		}
    });

    
    $('#frm_partner').validate({
        rules:{
            'empCode':{
                required: true,
                
            },
        },
        messages:{
            'empCode': {
                required:'Please enter emp code.',
                
            },

        },
        submitHandler: function(form) {
            form.submit();
            /*$.ajax({
                url:b_url+'home/searchPartnersByID',
                method:'POST',
                dataType:'json',
                data:$(form).serialize(),
                success:function(response){
                    
                    if(response.status=='error')
                    {
                        $('.error_message').html('').html(response.error);
                        $('.alert').fadeIn('slow');
                    }else if(response.status=='success'){
                        window.location.href=b_url+'quiz';
                    }
                }
            })*/
		}
    });

})