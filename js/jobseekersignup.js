$(document).ready(function(){
    // Function to be used to check if mobile number is valid, return boolean result(true or false)
    function isNumber(mobile){ 
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

    // Function to clear all the fields including the error messages and error borders
    function clearFields() {
        // Clear all the fields
        $('input').val(null);
        // Clear all the error borders
        $('.form-control').removeClass().addClass('form-control');
    }

    // Trigger this when user started to type in fullname input and validate it
    $('#fullname').on('keyup', function() {
        let fullname = $('#fullname').val();
        if(fullname.length == 0) {
            $('#fullname').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#fullname').popover({ placement: 'right', content: 'Fullname is required.'}).popover('show');
        } else if(!isValidName(fullname)) {
            $('#fullname').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#fullname').popover({ placement: 'right', content: 'Only characters are allowed.' }).popover('show');
        } else {
            $('#fullname').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })

    // Trigger this when user started to type in mobile number input and validate it
    $('#mobilenumber').on('keyup', function() {
        let mobilenumber = $('#mobilenumber').val();
        if(mobilenumber.length == 0) {
            $('#mobilenumber').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#mobilenumber').popover({ placement: 'right', content: 'Mobile number is required.'}).popover('show');
        } else if(isNumber(mobilenumber) == false) {
            $('#mobilenumber').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#mobilenumber').popover({ placement: 'right', content: 'Mobile number must be numeric.'}).popover('show');
        } else {
            $('#mobilenumber').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })
    
     // Trigger this when user started to type in companyaddress input and validate it
    $('#address').on('keyup', function () {
        let address = $('#address').val();
        if (address.length == 0) {
            $('#address').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#address').popover({ placement: 'right', content: 'Address is required.' }).popover('show');
        } else {
            $('#address').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })
    
     // Trigger this when user started to type in companyaddress input and validate it
    $('#birthday').on('keyup', function () {
        let address = $('#birthday').val();
        if (address.length == 0) {
            $('#birthday').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#birthday').popover({ placement: 'right', content: 'Birthday is required.' }).popover('show');
        } else {
            $('#birthday').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })
    
     // Trigger this when user started to type in companyaddress input and validate it
    $('#experience').on('keyup', function () {
        let address = $('#experience').val();
        if (address.length == 0) {
            $('#experience').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#experience').popover({ placement: 'right', content: 'Experience is required.' }).popover('show');
        } else {
            $('#experience').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })
    
     // Trigger this when user started to type in companyaddress input and validate it
    $('#salary').on('keyup', function () {
        let address = $('#salary').val();
        if (address.length == 0) {
            $('#salary').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#salary').popover({ placement: 'right', content: 'Salary is required.' }).popover('show');
        } else {
            $('#salary').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })
    
     // Trigger this when user started to type in companyaddress input and validate it
    $('#attainment').on('keyup', function () {
        let address = $('#attainment').val();
        if (address.length == 0) {
            $('#attainment').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#attainment').popover({ placement: 'right', content: 'H.E. Attainment is required.' }).popover('show');
        } else {
            $('#attainment').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })
    
     // Trigger this when user started to type in companyaddress input and validate it
    $('#hours').on('keyup', function () {
        let address = $('#hours').val();
        if (address.length == 0) {
            $('#hours').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#hours').popover({ placement: 'right', content: 'Available Hours is required.' }).popover('show');
        } else {
            $('#hours').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })

    // Trigger this when user started to type in email input and validate it
    $('#email').on('keyup', function() {
        let email = $('#email').val();
        if (email.length == 0) {
            $('#email').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#email').popover({ placement: 'right', content: 'Email is required.'}).popover('show');
        } else if(isEmail(email) == false) {
            $('#email').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#email').popover({ placement: 'right', content: 'Email is invalid.'}).popover('show');
        } else {
            $('#email').removeClass().addClass('form-control border-success').popover('dispose');
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
    
    // Trigger this when user started to type in confirm password input and validate it
    $('#confirmpassword').on('keyup', function() {
        let password = $('#password').val();
        let confirmpassword = $('#confirmpassword').val();
        if(confirmpassword.length == 0){
            $('#confirmpassword').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#confirmpassword').popover({ placement: 'right', content: 'Confirm password is required.'}).popover('show');
        } else if(password != confirmpassword) {
            $('#confirmpassword').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#confirmpassword').popover({ placement: 'right', content: 'Confirm password does not match.'}).popover('show');
        } else {
            $('#confirmpassword').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })

    // Trigger this when user clicked on sign-up button
    $('form').submit(function(event) {
        event.preventDefault();
        let fullname = $('#fullname').val();
        let address = $('#address').val();
        let birthday = $('#birthday').val();
        let experience = $('#experience').val();
        let salary = $('#salary').val();
        let attainment = $('#attainment').val();
        let hours = $('#hours').val();
        let mobilenumber = $('#mobilenumber').val();
        let email = $('#email').val();
        let password = $('#password').val();
        let confirmpassword = $('#confirmpassword').val();
		let profilePic = $('#profilePic').prop('files')[0];
        let resume = $('#resume').prop('files')[0];
		
		let formData = new FormData();
        formData.append('submit', true);
		formData.append('fullname', fullname);
		formData.append('mobilenumber', mobilenumber);
		formData.append('email', email);
		formData.append('password', password);
		formData.append('confirmpassword', confirmpassword);
		formData.append('address', address);
		formData.append('birthday', birthday);
		formData.append('salary', salary);
		formData.append('experience', experience);
		formData.append('attainment', attainment);
		formData.append('hours', hours);
		formData.append('profilePic', profilePic);
		formData.append('resume', resume);
        
        $.ajax({
            url: 'php/jobseekersignup.inc.php',
            type: 'POST',
            data: formData,
			contentType: false,
            processData: false,
            dataType: 'JSON',
            success: function(data) {
				console.log(data);
                if(data.status == 'success') {
                    // Function to clear all the fields including the error messages and error borders
                    clearFields();
                    // Create sweet alert to display error messages and return to index page
                    swal({
                        title: "Account Succesfully Created!",
                        icon: "success",
                        button: "Okay",
                    })
                    .then(function() {
                        window.location = "login.php";
                    });
                } else {
                    // if there is an error in fullname, display error message
                    if(data.fullnameRR.status == 'error') {
                        $('#fullname').removeClass().addClass('form-control border-danger');
                        $('#fullname').popover({ placement: 'right', content: data.fullnameRR.message }).popover('show');
                    } else {
                        $('#fullname').removeClass().addClass('form-control border-success').popover('dispose');
                    }
                    // if there is an error in number, display error message
                    if(data.mobilenumberRR.status == 'error') {
                        $('#mobilenumber').removeClass().addClass('form-control border-danger');
                        $('#mobilenumber').popover({ placement: 'right', content: data.mobilenumberRR.message }).popover('show');
                    } else {
                        $('#mobilenumber').removeClass().addClass('form-control border-success');
                    }
                    // if there is an error in email, display error message
                    if(data.emailRR.status == 'error') {
                        $('#email').removeClass().addClass('form-control border-danger');
                        $('#email').popover({ placement: 'right', content: data.emailRR.message }).popover('show');
                    } else {
                        $('#email').removeClass().addClass('form-control border-success');
                    }
                    // if there is an error in password, display error message
                    if(data.passwordRR.status == 'error') {
                        $('#password').removeClass().addClass('form-control border-danger');
                        $('#password').popover({ placement: 'right', content: data.passwordRR.message }).popover('show');
                    } else {
                        $('#password').removeClass().addClass('form-control border-success');
                    }
                    // if there is an error in confirm password, display error message
                    if(data.confirmpasswordRR.status == 'error') {
                        $('#confirmpassword').removeClass().addClass('form-control border-danger');
                        $('#confirmpassword').popover({ placement: 'right', content: data.confirmpasswordRR.message }).popover('show');
                    } else {
                        $('#confirmpassword').removeClass().addClass('form-control border-success');
                    }
                }   
            }
        })
    })
})