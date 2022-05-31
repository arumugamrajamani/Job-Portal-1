$(document).ready(function(){
    // Function to be used to check if mobile number is valid, return boolean result(true or false)
    function isNumber(mobile) { 
        var regex = new RegExp(/^[0-9-+]+$/);
        return regex.test(mobile); 
    } 

    // Function to be used to check if email is valid, return boolean result(true or false)
    function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }

    // Function to used to check if name is valid string, return boolean result(true or false)
    function isValidName(name) {
        var regex = new RegExp(/^[a-zA-Z .]+$/);
        return regex.test(name);
    }

    // Function for clearing input value, border color and error message
    function clearFields() {
        $('form')[0].reset();
        $('.form-control').removeClass('border-danger');
        $('.form-control').removeClass('border-success');
    }
    //--------------------------------Employer Details details----------------------------------------------

    // Trigger this when user started to type in fullname input and validate it
    $('#employerFullName').on('keyup', function() {
        let fullname = $('#employerFullName').val();
        if(fullname.length == 0) {
            $('#employerFullName').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#employerFullName').popover({ placement: 'right', content: 'Employer Fullname is required.'}).popover('show');
        } else if(!isValidName(fullname)) {
            $('#employerFullName').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#employerFullName').popover({ placement: 'right', content: 'Only characters are allowed.'}).popover('show');
        } else {
            $('#employerFullName').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })

    // Trigger this when user started to type in employerposition input and validate it
    $('#employerposition').on('keyup', function() {
        let position = $('#employerposition').val();
        if(position.length == 0) {
            $('#employerposition').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#employerposition').popover({ placement: 'right', content: 'Employer Position is required.'}).popover('show');
        } else {
            $('#employerposition').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })

    //--------------------------------End of Employer Details------------------------------------------------


    //--------------------------------Company Details--------------------------------------------------------

    // Trigger this when user started to type in companyname input and validate it
    $('#companyname').on('keyup', function() {
        let companyName = $('#companyname').val();
        if(companyName.length == 0) {
            $('#companyname').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#companyname').popover({ placement: 'right', content: 'Company Name is required.'}).popover('show');
            // $('#companyname-errorMsg').text("Company Name is required.");
        } else {
            $('#companyname').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })

    // Trigger this when user started to type in companyaddress input and validate it
    $('#companyaddress').on('keyup', function() {
        let address = $('#companyaddress').val();
        if(address.length == 0) {
            $('#companyaddress').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#companyaddress').popover({ placement: 'right', content: 'Company Address is required.'}).popover('show');
        } else {
            $('#companyaddress').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })

    // Trigger this when user started to type in companyceoname input and validate it
    $('#companyceoname').on('keyup', function() {
        let CEOname = $('#companyceoname').val();
        if(CEOname.length == 0) {
            $('#companyceoname').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#companyceoname').popover({ placement: 'right', content: 'Company CEO Name is required.'}).popover('show');
        } else if(!isValidName(CEOname)) {
            $('#companyceoname').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#companyceoname').popover({ placement: 'right', content: 'Only characters are allowed.'}).popover('show');
        } else {
            $('#companyceoname').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })

    // Trigger this when user started to type in companysize input and validate it. only accepts ints
    $('#companysize').on('keyup', function() {
        let companysize = $('#companysize').val();
        if(companysize.length == 0) {
            $('#companysize').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#companysize').popover({ placement: 'right', content: 'Company Size is required.'}).popover('show');
        }else if(!isNumber(companysize)){
            $('#companysize').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#companysize').popover({ placement: 'right', content: 'Only numbers are allowed.'}).popover('show');
        }else {
            $('#companysize').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })
    
    // Trigger this when user started to type in companysize input and validate it. only accepts ints
    $('#companyrevenue').on('keyup', function() {
        let companyrevenue = $('#companyrevenue').val();
        if(companyrevenue.length == 0) {
            $('#companyrevenue').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#companyrevenue').popover({ placement: 'right', content: 'Company Revenue is required.'}).popover('show');
        }else if(!isNumber(companyrevenue)){
            $('#companyrevenue').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#companyrevenue').popover({ placement: 'right', content: 'Only numbers are allowed.'}).popover('show');
        }else {
            $('#companyrevenue').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })

    // Trigger this when user started to type in industry input and validate it
    $('#industry').on('keyup', function() {
        let industry = $('#industry').val();
        if(industry.length == 0) {
            $('#industry').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#industry').popover({ placement: 'right', content: 'Industry is required.'}).popover('show');
        } else {
            $('#industry').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })

    // Trigger this when user started to type in industry input and validate it
    //the 1000 limit is in the html as maxlength="1000"
    $('#companydescription').on('keyup', function() {
        let companydescription = $('#companydescription').val();
        if(companydescription.length == 0) {
            $('#companydescription').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#companydescription').popover({ placement: 'right', content: 'Company Description is required.'}).popover('show');
        }else if(companydescription.length < 50){
            $('#companydescription').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#companydescription').popover({ placement: 'right', content: 'Atleast 50 characters are required.'}).popover('show');
        }else {
            $('#companydescription').removeClass().addClass('form-control border-success').popover('dispose');
            $('#companydescription-errorMsg').text(null);
        }
    })
    
    // Trigger this when user started to type in contactnumber input and validate it
    $('#contactnumber').on('keyup', function() {
        let contactnumber = $('#contactnumber').val();
        if(contactnumber.length == 0) {
            $('#contactnumber').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#contactnumber').popover({ placement: 'right', content: 'Contact Number is required.'}).popover('show');
        }else if(!isNumber(contactnumber)){
            $('#contactnumber').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#contactnumber').popover({ placement: 'right', content: 'Only numbers are allowed.'}).popover('show');
        }else {
            $('#contactnumber').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })       
    
    // Trigger this when user started to type in email input and validate it
    $('#companyemail').on('keyup', function() {
        let companyemail = $('#companyemail').val();
        console.log(companyemail)
        if (companyemail.length == 0) {
            $('#companyemail').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#companyemail').popover({ placement: 'right', content: 'Company Email is required.'}).popover('show');
        } else if(isEmail(companyemail) == false) {
            $('#companyemail').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#companyemail').popover({ placement: 'right', content: 'Email is invalid.'}).popover('show');
        } else {
            $('#companyemail').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })


    //--------------------------------End of Company Details-----------------------------------------------


    //--------------------------------Login details--------------------------------------------------------

    // Trigger this when user started to type in email input and validate it
    $('#emailaddress').on('keyup', function() {
        let emailaddress = $('#emailaddress').val();
        console.log(emailaddress)
        if (emailaddress.length == 0) {
            $('#emailaddress').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#emailaddress').popover({ placement: 'right', content: 'Email Address is required.'}).popover('show');
        } else if(isEmail(emailaddress) == false) {
            $('#emailaddress').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#emailaddress').popover({ placement: 'right', content: 'Email is invalid.'}).popover('show');
        } else {
            $('#emailaddress').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })

    // Trigger this when user started to type in password input and validate it
    $('#password').on('keyup', function() {
        let password = $('#password').val();
        if(password.length == 0) {
            $('#password').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#password').popover({ placement: 'right', content: 'Password is required.'}).popover('show');
        } else if(password.length < 8 || password.length > 30) {
            $('#password').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#password').popover({ placement: 'right', content: 'Password must be between 8 and 30 characters.'}).popover('show');
        } 
        else {
            $('#password').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })
    
    .popover('dispose')
    // Trigger this when user started to type in confirm password input and validate 
    $('#confirmpassword').on('keyup', function() {
        let password = $('#password').val();
        let confirmpassword = $('#confirmpassword').val();
        if(confirmpassword.length == 0){
            $('#confirmpassword').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#confirmpassword').popover({ placement: 'right', content: 'Confirm Password is required.'}).popover('show');
        } else if(password != confirmpassword) {
            $('#confirmpassword').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#confirmpassword').popover({ placement: 'right', content: 'Password does not match.'}).popover('show');
        } else {
            $('#confirmpassword').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })
    //--------------------------------End of Login Details--------------------------------------------------   
    
    $('form').submit(function(event){
        event.preventDefault();

        // Company get details and assigned to variables
        let employerName = $('#employerFullName').val();
        let employerPosition = $('#employerposition').val();
        let companyname = $('#companyname').val();
        let companyaddress = $('#companyaddress').val();
        let companyCEO = $('#companyceoname').val();
        let companysize = $('#companysize').val();
        let companyRevenue = $('#companyrevenue').val();
        let industry = $('#industry').val();
        let companydescription = $('#companydescription').val();
        let contactnumber = $('#contactnumber').val();
        let companyEmail = $('#companyemail').val();
        let companylogo = $('#companyLogo').prop('files')[0];
        let permit = $('#dtipermit').prop('files')[0];
        let email = $('#emailaddress').val();
        let password = $('#password').val();
        let confirmpassword = $('#confirmpassword').val();

        // Create formdata object and append all the data to it
        let formData = new FormData();
        formData.append('employerName', employerName);
        formData.append('employerPosition', employerPosition);
        formData.append('companyName', companyname);
        formData.append('companyAddress', companyaddress);
        formData.append('companyCEO', companyCEO);
        formData.append('companySize', companysize);
        formData.append('companyRevenue', companyRevenue);
        formData.append('industry', industry);
        formData.append('companyDescription', companydescription);
        formData.append('contactNumber', contactnumber);
        formData.append('companyEmail', companyEmail);
        formData.append('companyLogo', companylogo);
        formData.append('permit', permit);
        formData.append('email', email);
        formData.append('password', password);
        formData.append('confirmPassword', confirmpassword);
        formData.append('submit', "true");
        
        // Create ajax request
        $.ajax({
            url: "php/companyregister.inc.php",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            dataType: "JSON",
            success: function(data) {
                // Checking if the data is success or not
                if(data.status == "success") {
                    clearFields();
                    // Create sweet alert to display error messages and return to index page
                    swal({
                        title: "Account Succesfully Created!",
                        icon: "success",
                        button: "Okay",
                    }).then(function() {
                        window.location = "login.php";
                    });
                // Checking of each input status and display error message
                } else {
                    // <---------------------------------Employers Details---------------------------------------------------->
                    // Checking of status of employer name
                    if(data.employerNameRR.status == "error") {
                        $('#employerFullName').removeClass().addClass('form-control border-danger');
                        $('#employerFullName').popover({ placement: 'right', content: data.employerNameRR.message}).popover('show');
                    } else {
                        $('#employerFullName').removeClass().addClass('form-control border-success');
                    }
                    // Checking of status of employer position
                    if(data.employerPositionRR.status == "error") {
                        $('#employerposition').removeClass().addClass('form-control border-danger');
                        $('#employerposition').popover({ placement: 'right', content: data.employerPositionRR.message}).popover('show');
                    } else {
                        $('#employerposition').removeClass().addClass('form-control success-danger');
                    }
                    // <---------------------------------Company Details---------------------------------------------------->                   
                    // Checking of status of company name
                    if(data.companyNameRR.status == "error") {
                        $('#companyname').removeClass().addClass('form-control border-danger');
                        $('#companyname').popover({ placement: 'right', content: data.companyNameRR.message}).popover('show');
                    } else {
                        $('#companyname').removeClass().addClass('form-control border-success');
                    }
                    // Checking of status of company address
                    if(data.companyAddressRR.status == "error") {
                        $('#companyaddress').removeClass().addClass('form-control border-danger');
                        $('#companyaddress').popover({ placement: 'right', content: data.companyAddressRR.message}).popover('show');
                    } else {
                        $('#companyaddress').removeClass().addClass('form-control border-success');
                    }
                    // Checking of status of company CEO
                    if(data.companyCEORR.status == "error") {
                        $('#companyceoname').removeClass().addClass('form-control border-danger');
                        $('#companyceoname').popover({ placement: 'right', content: data.companyCEORR.message}).popover('show');
                    } else {
                        $('#companyceoname').removeClass().addClass('form-control border-success');
                    }
                    // Checking of status of company size
                    if(data.companySizeRR.status == "error") {
                        $('#companysize').removeClass().addClass('form-control border-danger');
                        $('#companysize').popover({ placement: 'right', content: data.companySizeRR.message}).popover('show');
                    } else {
                        $('#companysize').removeClass().addClass('form-control border-success');
                    }
                    // Checking of status of company revenue
                    if(data.companyRevenueRR.status == "error") {
                        $('#companyrevenue').removeClass().addClass('form-control border-danger');
                        $('#companyrevenue').popover({ placement: 'right', content: data.companyRevenueRR.message}).popover('show');
                    } else {
                        $('#companyrevenue').removeClass().addClass('form-control border-success');
                    }
                    // Checking of status of industry
                    if(data.industryRR.status == "error") {
                        $('#industry').removeClass().addClass('form-control border-danger');
                        $('#industry').popover({ placement: 'right', content: data.industryRR.message}).popover('show');
                    } else {
                        $('#industry').removeClass().addClass('form-control border-success');
                    }
                    // Checking of status of company description
                    if(data.companyDescriptionRR.status == "error") {
                        $('#companydescription').removeClass().addClass('form-control border-danger');
                        $('#companydescription').popover({ placement: 'right', content: data.companyDescriptionRR.message}).popover('show');
                    } else {
                        $('#companydescription').removeClass().addClass('form-control border-success');
                    }
                    // Checking of status of contact number
                    if(data.contactNumberRR.status == "error") {
                        $('#contactnumber').removeClass().addClass('form-control border-danger');
                        $('#contactnumber').popover({ placement: 'right', content: data.contactNumberRR.message}).popover('show');
                    } else {
                        $('#contactnumber').removeClass().addClass('form-control border-success');
                    }
                    // Checking of status of contact number
                    if(data.companyEmailRR.status == "error") {
                        $('#companyemail').removeClass().addClass('form-control border-danger');
                        $('#companyemail').popover({ placement: 'right', content: data.companyEmailRR.message}).popover('show');
                    } else {
                        $('#companyemail').removeClass().addClass('form-control border-success');
                    }
                    // Checking of status of company logo
                    if(data.companyLogoRR.status == "error") {
                        $('#companyLogo').removeClass().addClass('form-control border-danger').popover('dispose');
                        $('#companyLogo').popover({ placement: 'right', content: data.companyLogoRR.message}).popover('show');
                    } else {
                        $('#companyLogo').removeClass().addClass('form-control border-success').popover('dispose');
                    }
                    // Checking of status of company logo
                    if(data.permitRR.status == "error") {
                        $('#dtipermit').removeClass().addClass('form-control border-danger').popover('dispose');
                        $('#dtipermit').popover({ placement: 'right', content: data.permitRR.message}).popover('show');
                    } else {
                        $('#dtipermit').removeClass().addClass('form-control border-success').popover('dispose');
                    }
                    // <---------------------------------Login Details---------------------------------------------------->
                    // Checking of status of email number
                    if(data.emailRR.status == "error") {
                        $('#emailaddress').removeClass().addClass('form-control border-danger');
                        $('#emailaddress').popover({ placement: 'right', content: data.emailRR.message}).popover('show');
                    } else {
                        $('#emailaddress').removeClass().addClass('form-control border-success');
                    }
                    // Checking of status of password 
                    if(data.passwordRR.status == "error") {
                        $('#password').removeClass().addClass('form-control border-danger');
                        $('#password').popover({ placement: 'right', content: data.passwordRR.message}).popover('show');
                    } else {
                        $('#password').removeClass().addClass('form-control border-success');
                    }
                    // Checking of status of confirm password
                    if(data.confirmPasswordRR.status == "error") {
                        $('#confirmpassword').removeClass().addClass('form-control border-danger');
                        $('#confirmpassword').popover({ placement: 'right', content: data.confirmPasswordRR.message}).popover('show');
                    } else {
                        $('#confirmpassword').removeClass().addClass('form-control border-success');
                    }
                }
            }    
        })
    })
})

// Function for counting the number of characters in the textarea
function countChar(val) {
    var len = val.value.length;
    if (len >= 1000) {
        val.value = val.value.substring(50, 1000);
    } else {
        $('#charNum').text(1000 - len);
    }
}