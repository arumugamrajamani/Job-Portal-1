$(document).ready(function(){
    // Function to be used to check if mobile number is valid, return boolean result(true or false)
    function isNumber(mobile) 
    { 
        var regex = new RegExp(/^[0-9-+]+$/);
        return regex.test(mobile); 
    } 


    // Function to be used to check if email is valid, return boolean result(true or false)
    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }




        //--------------------------------Employer Details details----------------------------------------------

        // Trigger this when user started to type in fullname input and validate it
        $('#employerFullName').on('keyup', function() {
            let fullname = $('#employerFullName').val();
            if(fullname.length == 0) {
                $('#employerFullName').removeClass().addClass('form-control border-danger');
                $('#fullname-errorMsg').text("Fullname is required.");
            } else {
                $('#employerFullName').removeClass().addClass('form-control border-success');
                $('#fullname-errorMsg').text(null);
            }
        })

        // Trigger this when user started to type in employerposition input and validate it
        $('#employerposition').on('keyup', function() {
            let fullname = $('#employerposition').val();
            if(fullname.length == 0) {
                $('#employerposition').removeClass().addClass('form-control border-danger');
                $('#employerposition-errorMsg').text("Employer Position is required.");
            } else {
                $('#employerposition').removeClass().addClass('form-control border-success');
                $('#employerposition-errorMsg').text(null);
            }
        })

        //--------------------------------End of Employer Details------------------------------------------------


        //--------------------------------Company Details--------------------------------------------------------

        // Trigger this when user started to type in companyname input and validate it
        $('#companyname').on('keyup', function() {
            let fullname = $('#companyname').val();
            if(fullname.length == 0) {
                $('#companyname').removeClass().addClass('form-control border-danger');
                $('#companyname-errorMsg').text("Company Name is required.");
            } else {
                $('#companyname').removeClass().addClass('form-control border-success');
                $('#companyname-errorMsg').text(null);
            }
        })

        // Trigger this when user started to type in companyaddress input and validate it
        $('#companyaddress').on('keyup', function() {
            let fullname = $('#companyaddress').val();
            if(fullname.length == 0) {
                $('#companyaddress').removeClass().addClass('form-control border-danger');
                $('#companyaddress-errorMsg').text("Company Address is required.");
            } else {
                $('#companyaddress').removeClass().addClass('form-control border-success');
                $('#companyaddress-errorMsg').text(null);
            }
        })

        // Trigger this when user started to type in companyceoname input and validate it
        $('#companyceoname').on('keyup', function() {
            let fullname = $('#companyceoname').val();
            if(fullname.length == 0) {
                $('#companyceoname').removeClass().addClass('form-control border-danger');
                $('#companyceoname-errorMsg').text("Company CEO Name is required.");
            } else {
                $('#companyceoname').removeClass().addClass('form-control border-success');
                $('#companyceoname-errorMsg').text(null);
            }
        })

        // Trigger this when user started to type in companysize input and validate it. only accepts ints
        $('#companysize').on('keyup', function() {
            let companysize = $('#companysize').val();
            if(companysize.length == 0) {
                $('#companysize').removeClass().addClass('form-control border-danger');
                $('#companysize-errorMsg').text("Company Size is required.");
            }else if(!isNumber(companysize)){
                $('#companysize').removeClass().addClass('form-control border-danger');
                $('#companysize-errorMsg').text("Numbers only. ex. 100000 or 100");
            }else {
                $('#companysize').removeClass().addClass('form-control border-success');
                $('#companysize-errorMsg').text(null);
            }
        })
        
        // Trigger this when user started to type in companysize input and validate it. only accepts ints
        $('#companyrevenue').on('keyup', function() {
            let companyrevenue = $('#companyrevenue').val();
            if(companysize.length == 0) {
                $('#companyrevenue').removeClass().addClass('form-control border-danger');
                $('#companyrevenue-errorMsg').text("Company Size is required.");
            }else if(!isNumber(companyrevenue)){
                $('#companyrevenue').removeClass().addClass('form-control border-danger');
                $('#companyrevenue-errorMsg').text("Numbers only. ex. 100000 or 100");
            }else {
                $('#companyrevenue').removeClass().addClass('form-control border-success');
                $('#companyrevenue-errorMsg').text(null);
            }
        })

        // Trigger this when user started to type in industry input and validate it
        $('#industry').on('keyup', function() {
            let fullname = $('#industry').val();
            if(fullname.length == 0) {
                $('#industry').removeClass().addClass('form-control border-danger');
                $('#industry-errorMsg').text("Industry is required.");
            } else {
                $('#industry').removeClass().addClass('form-control border-success');
                $('#industry-errorMsg').text(null);
            }
        })

        // Trigger this when user started to type in industry input and validate it
        //the 1000 limit is in the html as maxlength="1000"
        $('#companydescription').on('keyup', function() {
            let companydescription = $('#companydescription').val();
            if(companydescription.length == 0) {
                $('#companydescription').removeClass().addClass('form-control border-danger');
                $('#companydescription-errorMsg').text("Company Description is required.");
            }else if(companydescription.length < 50){
                $('#companydescription').removeClass().addClass('form-control border-danger');
                $('#companydescription-errorMsg').text("Atleast 50 characters are required.");
            }else {
                $('#companydescription').removeClass().addClass('form-control border-success');
                $('#companydescription-errorMsg').text(null);
            }
        })
        
        // Trigger this when user started to type in contactnumber input and validate it
        $('#contactnumber').on('keyup', function() {
            let contactnumber = $('#contactnumber').val();
            if(contactnumber.length == 0) {
                $('#contactnumber').removeClass().addClass('form-control border-danger');
                $('#contactnumber-errorMsg').text("Contact Number is required.");
            }else if(!isNumber(contactnumber)){
                $('#contactnumber').removeClass().addClass('form-control border-danger');
                $('#contactnumber-errorMsg').text("Please enter a valid number.");
            }else {
                $('#contactnumber').removeClass().addClass('form-control border-success');
                $('#contactnumber-errorMsg').text(null);
            }
        })       
        
        // Trigger this when user started to type in email input and validate it
        $('#companyemail').on('keyup', function() {
            let companyemail = $('#companyemail').val();
            console.log(companyemail)
            if (companyemail.length == 0) {
                $('#companyemail').removeClass().addClass('form-control border-danger');
                $('#companyemail-errorMsg').text("Email is required.");
            } else if(isEmail(companyemail) == false) {
                $('#companyemail').removeClass().addClass('form-control border-danger');
                $('#companyemail-errorMsg').text("Email is not valid.");
            } else {
                $('#companyemail').removeClass().addClass('form-control border-success');
                $('#companyemail-errorMsg').text(null);
            }
        })


        //--------------------------------End of Company Details-----------------------------------------------


        //--------------------------------Login details--------------------------------------------------------

        // Trigger this when user started to type in email input and validate it
        $('#emailaddress').on('keyup', function() {
            let emailaddress = $('#emailaddress').val();
            console.log(emailaddress)
            if (emailaddress.length == 0) {
                $('#emailaddress').removeClass().addClass('form-control border-danger');
                $('#emailaddress-errorMsg').text("Email is required.");
            } else if(isEmail(emailaddress) == false) {
                $('#emailaddress').removeClass().addClass('form-control border-danger');
                $('#emailaddress-errorMsg').text("Email is not valid.");
            } else {
                $('#emailaddress').removeClass().addClass('form-control border-success');
                $('#emailaddress-errorMsg').text(null);
            }
        })

    // Trigger this when user started to type in password input and validate it
    $('#password').on('keyup', function() {
        let password = $('#password').val();
        if(password.length == 0) {
            $('#password').removeClass().addClass('form-control border-danger');
            $('#password-errorMsg').text("Password is required.");
        } else if(password.length < 8 || password.length > 30) {
            $('#password').removeClass().addClass('form-control border-danger');
            $('#password-errorMsg').text("Password must be between 8 and 30 characters.");
        } 
        else {
            $('#password').removeClass().addClass('form-control border-success');
            $('#password-errorMsg').text(null);
        }
    })

        //--------------------------------End of Login Details--------------------------------------------------

        
})