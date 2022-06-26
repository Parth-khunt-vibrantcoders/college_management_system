$( "#register-user" ).validate({
    errorElement: 'span',
    errorClass: 'help-block', 
    focusInvalid: true, 
    ignore: ":hidden",
    rules: {
        email: {
            required: true,
            email : true
        },
        first_name: {
            required: true
        },
        last_name: {
            required: true
        },
        password: {
            required: true
        },
        confirm_password: {
            required: true,
            equalTo : "#password"
        },
    },
    messages: {
        email: {
            required: "Please enter your email.",
            email : "Please enter valid email"
        },
        first_name: {
            required: "Please enter your first name"
        },
        last_name: {
            required: "Please enter your last name"
        },
        password: {
            required: "Please enter password"
        },  
        confirm_password: {
            required: "Please enter your confirm password",
            equalTo : "Confirm Password must be equal to password"
        },    
    }
  });