$( "#login-check" ).validate({
    errorElement: 'span',
    errorClass: 'help-block', 
    focusInvalid: true, 
    ignore: ":hidden",
    rules: {
        email: {
            required: true,
            email : true
        },
        password: {
            required: true
        },
    },
    messages: {
        email: {
            required: "Please enter your email.",
            email : "Please enter valid email"
        },
        password: {
            required: "Please enter password"
        },      
    }
  });