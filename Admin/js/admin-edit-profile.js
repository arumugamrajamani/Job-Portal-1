$(document).ready(function () {
    fetchData();

    // Set option for toaster function
    toastr.options = {
        "preventDuplicates": true,
        "timeOut": 2000,
    };

    // Function to clear border color
    function clearBorderColor() {
        $("#fullname").removeClass().addClass("form-control");
        $("#contactnumber").removeClass().addClass("form-control");
    }

    //fetch the admin's data from the database
    function fetchData() {
        $.ajax({
            url: 'php/admin-edit-profile.inc.php',
            type: 'POST',
            data: {
                fetchData: true
            },
            dataType: "JSON",
            success: function (data) {
                // insert the data into the input fields
                $('#fullname').val(data.fullName);
                $('#email').val(data.email);
                $('#contactnumber').val(data.number);
                $('#profile-pic-view').attr('src', data.profilePic);
            }
        });
    }

    // Function to be used to check if mobile number is valid, return boolean result(true or false)
    function isNumber(mobile) {
        var regex = new RegExp(/^[0-9-+]+$/);
        return regex.test(mobile);
    }

    // Function to used to check if name is valid string, return boolean result(true or false)
    function isValidName(name) {
        var regex = new RegExp(/^[a-zA-Z .]+$/);
        return regex.test(name);
    }

    // Trigger this when user started to type in fullname input and validate it
    $('#fullname').on('keyup', function () {
        let fullname = $('#fullname').val();
        if (fullname.length == 0) {
            $('#fullname').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#fullname').popover({ placement: 'right', content: 'Fullname is required.' }).popover('show');
        } else if (!isValidName(fullname)) {
            $('#fullname').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#fullname').popover({ placement: 'right', content: 'Only characters are allowed.' }).popover('show');
        } else {
            $('#fullname').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })

    // Trigger this when user started to type in mobile number input and validate it
    $('#contactnumber').on('keyup', function () {
        let contactnumber = $('#contactnumber').val();
        if (contactnumber.length == 0) {
            $('#contactnumber').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#contactnumber').popover({ placement: 'right', content: 'Contact number is required.' }).popover('show');
        } else if (isNumber(contactnumber) == false) {
            $('#contactnumber').removeClass().addClass('form-control border-danger').popover('dispose');
            $('#contactnumber').popover({ placement: 'right', content: 'Contact number must be numeric.' }).popover('show');
        } else {
            $('#contactnumber').removeClass().addClass('form-control border-success').popover('dispose');
        }
    })

    // Trigger this when there is changes in upload profile input
    $(document).on('change', '#profilePic', function () {
        // get the file name
        let profilePic = $("#profilePic").prop('files')[0];
        let form_data = new FormData();
        form_data.append("profilePic", profilePic);
        form_data.append("changeprofile", true);
        $.ajax({
            url: "php/admin-edit-profile.inc.php",
            type: "POST",
            contentType: false,
            processData: false,
            cache: false,
            data: form_data,
            dataType: 'JSON',
            success: function (data) {
                if (data.status == 'error') {
                    toastr.error('', data.message);
                }
            }
        })
    })

    // Trigger this when user clic save now 
    $(document).on('click', '#save-now', function () {
        let fullname = $('#fullname').val();
        let contactnumber = $('#contactnumber').val();

        $.ajax({
            url: 'php/admin-edit-profile.inc.php',
            type: 'POST',
            data: {
                fullname: fullname,
                contactnumber: contactnumber,
                saveNow: true
            },
            dataType: 'JSON',
            success: function (data) {
                if (data.status == "success") {
                    toastr.success('', data.message);
                    // Call this function to clear border color
                    clearBorderColor();
                } else {
                    toastr.error('', data.message);
                }
            }
        })
    })

});